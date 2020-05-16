<?php
// This file is part of Stack - http://stack.maths.ed.ac.uk/
//
// Stack is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Stack is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Stack.  If not, see <http://www.gnu.org/licenses/>.

defined('MOODLE_INTERNAL') || die();

/**
 * An input which provides a matrix input of variable size.
 *
 * @copyright  2019 Ruhr University Bochum
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class stack_varmatrix_input extends stack_input {

    protected $extraoptions = array(
        'simp' => false,
        'rationalized' => false,
        'allowempty' => false
    );

    public function render(stack_input_state $state, $fieldname, $readonly, $tavalue) {
        global $PAGE;

        if ($this->errors) {
            return $this->render_error($this->errors);
        }

        $value = $state->contentsmodified;
        if (trim($value) != '') {
            $cs = stack_ast_container::make_from_teacher_source($value, '', new stack_cas_security());
            $value = $cs->ast_to_string(null, array('varmatrix' => true));
        }

        $size = $this->parameters['boxWidth'] * 0.9 + 0.1;
        $attributes = array(
            'type'  => 'hidden',
            'name'  => $fieldname,
            'id'    => $fieldname,
            'class' => '',
            'size'  => $this->parameters['boxWidth'] * 1.1,
            'style' => 'width: '.$size.'em',
            'autocapitalize' => 'none',
            'spellcheck'     => 'false',
        );

        if ($value == 'EMPTYANSWER') {
            // Active empty choices don't result in a syntax hint again (with that option set).
            $attributes['value'] = '';
        } else if ($this->is_blank_response($state->contents)) {
            $field = 'value';
            if ($this->parameters['syntaxAttribute'] == '1') {
                $field = 'placeholder';
            }
            $attributes[$field] = $this->parameters['syntaxHint'];
        }

        if ($readonly) {
            $attributes['readonly'] = 'readonly';
        }

        // Put in the Javascript magic!
        $PAGE->requires->js_call_amd('qtype_stack/inputvarmatrix', 'setupVarmatrix', [$attributes['id']]);

        // Read matrix bracket style from options.
        $matrixparens = $this->options->get_option('matrixparens');
        if ($matrixparens == '[') {
            $matrixbrackets = 'matrixsquarebrackets';
        } else if ($matrixparens == '|') {
            $matrixbrackets = 'matrixbarbrackets';
        } else if ($matrixparens == '') {
            $matrixbrackets = 'matrixnobrackets';
        } else {
            $matrixbrackets = 'matrixroundbrackets';
        }
        $xhtml = '<div class="' . $matrixbrackets . '">';
        $xhtml .= '<textarea id="matrixinput' . $fieldname . '" class="varmatrixinput">' . $value . '</textarea>';
        $xhtml .= '</div><br>';
        $xhtml .= html_writer::empty_tag('input', $attributes);
        return $xhtml;
    }

    public function add_to_moodleform_testinput(MoodleQuickForm $mform) {
        $mform->addElement('text', $this->name, $this->name, array('size' => $this->parameters['boxWidth']));
        $mform->setDefault($this->name, $this->parameters['syntaxHint']);
        $mform->setType($this->name, PARAM_RAW);
    }

    /**
     * Return the default values for the parameters.
     * Parameters are options a teacher might set.
     * @return array parameters` => default value.
     */
    public static function get_parameters_defaults() {
        return array(
            'mustVerify'         => true,
            'showValidation'     => 1,
            'boxWidth'           => 15,
            'strictSyntax'       => false,
            'insertStars'        => 0,
            'syntaxHint'         => '',
            'syntaxAttribute'    => 0,
            'forbidWords'        => '',
            'allowWords'         => '',
            'forbidFloats'       => true,
            'lowestTerms'        => true,
            // This looks odd, but the teacher's answer is a list and the student's a matrix.
            'sameType'           => false,
            'options'            => '');
    }

    /**
     * Each actual extension of this base class must decide what parameter values are valid
     * @return array of parameters names.
     */
    public function internal_validate_parameter($parameter, $value) {
        $valid = true;
        switch($parameter) {
            case 'boxWidth':
                $valid = is_int($value) && $value > 0;
                break;
        }
        return $valid;
    }

}
