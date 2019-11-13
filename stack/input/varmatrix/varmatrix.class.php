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

    /*
     * completeoptions is an array of the possible values the teacher suggests.
    */
    protected $completeoptions = array();

    /*
     * This holds the value of those which the teacher has indicated are correct.
     */
    protected $teacheranswervalue = '';

    /*
     * This holds a displayed form of $this->teacheranswer. We need to generate this from those
     * entries which the teacher has indicated are correct.
     */
    protected $teacheranswerdisplay = '';

    protected $extraoptions = array(
        'simp' => false,
        'rationalized' => false,
        'allowempty' => false
    );

    public function adapt_to_model_answer($teacheranswer) {

        // Work out how big the matrix should be from the INSTANTIATED VALUE of the teacher's answer.
        $cs = stack_ast_container::make_from_teacher_source('matrix_size(' . $teacheranswer . ')');
        $cs->get_valid();
        $at1 = new stack_cas_session2(array($cs), null, 0);
        $at1->instantiate();

        if ('' != $at1->get_errors()) {
            $this->errors[] = $at1->get_errors();
            return;
        }

        // These are ints...
        $this->height = $cs->get_list_element(0, true)->value;
        $this->width = $cs->get_list_element(1, true)->value;
    }

    public function render(stack_input_state $state, $fieldname, $readonly, $tavalue) {
        global $PAGE;

        if ($this->errors) {
            return $this->render_error($this->errors);
        }

        $size = $this->parameters['boxWidth'] * 0.9 + 0.1;
        $attributes = array(
            'type'  => 'hidden',
            'name'  => $fieldname,
            'id'    => $fieldname,
            'class' => 'varmatrixinput',
            'size'  => $this->parameters['boxWidth'] * 1.1,
            'style' => 'width: '.$size.'em',
            'autocapitalize' => 'none',
            'spellcheck'     => 'false',
        );

        $value = $this->contents_to_maxima($state->contents);
        if ($value == 'EMPTYANSWER') {
            // Active empty choices don't result in a syntax hint again (with that option set).
            $attributes['value'] = '';
        } else if ($this->is_blank_response($state->contents)) {
            $field = 'value';
            if ($this->parameters['syntaxAttribute'] == '1') {
                $field = 'placeholder';
            }
            $attributes[$field] = $this->parameters['syntaxHint'];
        } else {
            $attributes['value'] = $value;
        }

        if ($readonly) {
            $attributes['readonly'] = 'readonly';
        }
        // Put in the Javascript magic!
        $PAGE->requires->js_call_amd('qtype_stack/inputvarmatrix', 'setupVarmatrix', [$attributes['id']]);

        $xhtml = '    <div class="varmatrixinputdiv">
        <div class="varmatrixBorderTopLeft"></div>
        <div class="varmatrixBorderTopRight"></div>
        <span id="varmatrixinput'.$attributes['id'].'" class="varmatrixinputspan" contenteditable="true">&ensp;</span>
        <div class="varmatrixBorderBottomLeft"></div>
        <div class="varmatrixBorderBottomRight"></div>
    </div>';
        //$attributes['data-options'] = '["'.implode($this->completeoptions, '","').'"]';
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

    /**
     * This is used by the question to get the teacher's correct response.
     * The dropdown type needs to intercept this to filter the correct answers.
     * @param unknown_type $in
     */
    public function get_correct_response($in) {
        $this->adapt_to_model_answer($in);
        return $this->maxima_to_response_array($this->teacheranswervalue);
    }

    /**
     * @return string the teacher's answer, displayed to the student in the general feedback.
     */
    public function get_teacher_answer_display($value, $display) {
        return stack_string('teacheranswershow',
                array('value' => '<code>'.$this->teacheranswervalue.'</code>', 'display' => $this->teacheranswerdisplay));
    }
}
