// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * A javascript module for the varmatrix input type 
 *
 * @package    qtype_stack
 * @copyright  2019 Ruhr University Bochum
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
define(['jquery', 'core/ajax', 'core/event'], function($, jqueryui, ajax, coreevent) {

    "use strict";

     var t = {
        setupVarmatrix: function(name) {
          $('[id="matrixinput'+name+'"]').keyup(function() {
              var lines=$('[id="matrixinput'+name+'"]').val().trim().replace(/&nbsp;/g, ' ').split(/\n/).filter(Boolean);
              lines=lines.map(line=>line.split(/[\t\ ,;]/).filter(Boolean));
              var maxlength=Math.max.apply(null, lines.map(e=>e.length));
              lines=lines.map(line=>line.concat(Array(maxlength-line.length).fill(0)));
              lines=lines.map(line=>"["+line.join(",")+"]");
              lines="matrix("+lines.join(",")+")";
              $('[id="'+name+'"]').val(lines);
          });
          $('[id="matrixinput'+name+'"]').on('input', function(){
              $('[id="matrixinput'+name+'"]').css('width',  1);
              $('[id="matrixinput'+name+'"]').css('height',  1);
              $('[id="matrixinput'+name+'"]').css('width',  10+$('[id="matrixinput'+name+'"]').prop('scrollWidth'));
              $('[id="matrixinput'+name+'"]').css('height', $('[id="matrixinput'+name+'"]').prop('scrollHeight'));
          });
        }
    };
    return t;
});
