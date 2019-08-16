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

require_once(__DIR__ . '/../tests/fixtures/ast_filter_test_base.php');

// Auto-generated unit tests for AST-filter DO NOT EDIT!
/**
 * @group qtype_stack
 * @group qtype_stack_ast_filters
 */

class stack_ast_filter_auto_gen_542_no_functions_at_all_testcase extends qtype_stack_ast_testcase {

    public function test_affected_no_units() {
        $this->security = new stack_cas_security(false);
        $this->filter = stack_parsing_rule_factory::get_by_common_name('542_no_functions_at_all');

        $this->expect('"+"(a,b)',
                      '"+"(a,b)',
                      array('noFunction'),
                      false, true);

        $this->expect("'diff(x,y)",
                      "'diff(x,y)",
                      array('noFunction'),
                      false, true);

        $this->expect("'int(x,y)",
                      "'int(x,y)",
                      array('noFunction'),
                      false, true);

        $this->expect('(-b+-sqrt(b^2))/(2*a)',
                      '(-b+-sqrt(b^2))/(2*a)',
                      array('noFunction'),
                      false, true);

        $this->expect('(x+2)(x+3)',
                      '(x+2)(x+3)',
                      array('noFunction'),
                      false, true);

        $this->expect('-(1/512) + i(sqrt(3)/512)',
                      '-(1/512)+i(sqrt(3)/512)',
                      array('noFunction'),
                      false, true);

        $this->expect('-3x(1+x)',
                      '-3*x(1+x)',
                      array('noFunction'),
                      false, true);

        $this->expect('-b(5-b)',
                      '-b(5-b)',
                      array('noFunction'),
                      false, true);

        $this->expect('-x(1+x)',
                      '-x(1+x)',
                      array('noFunction'),
                      false, true);

        $this->expect('1-x(1+x)',
                      '1-x(1+x)',
                      array('noFunction'),
                      false, true);

        $this->expect('1/sin(+x)',
                      '1/sin(+x)',
                      array('noFunction'),
                      false, true);

        $this->expect('2+log_x(1/(x+b))*x^2',
                      '2+log_x(1/(x+b))*x^2',
                      array('noFunction'),
                      false, true);

        $this->expect('3b+5/a(x)',
                      '3*b+5/a(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('7x(2+1)',
                      '7*x(2+1)',
                      array('noFunction'),
                      false, true);

        $this->expect('Bgcd(3,2)',
                      'Bgcd(3,2)',
                      array('noFunction'),
                      false, true);

        $this->expect('In(x)',
                      'In(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('Sin(x)',
                      'Sin(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('a(x)',
                      'a(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('a/(a(x+1)+2)',
                      'a/(a(x+1)+2)',
                      array('noFunction'),
                      false, true);

        $this->expect('abs(13)',
                      'abs(13)',
                      array('noFunction'),
                      false, true);

        $this->expect('abs(x)',
                      'abs(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('arcsin(x)',
                      'arcsin(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('asin(x)',
                      'asin(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('asinh(x)',
                      'asinh(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('b(b+1)',
                      'b(b+1)',
                      array('noFunction'),
                      false, true);

        $this->expect('b/a(x)',
                      'b/a(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('bsin(t)',
                      'bsin(t)',
                      array('noFunction'),
                      false, true);

        $this->expect('ceiling(x)',
                      'ceiling(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('comb(x,y)',
                      'comb(x,y)',
                      array('noFunction'),
                      false, true);

        $this->expect('cos(2x)(x+1)',
                      'cos(2*x)(x+1)',
                      array('noFunction'),
                      false, true);

        $this->expect('cos(x)',
                      'cos(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('cosec(x)',
                      'cosec(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('cosech(x)',
                      'cosech(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('cosh(x)',
                      'cosh(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('cot(x)',
                      'cot(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('coth(x)',
                      'coth(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('csc(6*x)^2*(7*sin(6*x)*cos(7*x)-6*cos(6*x)*sin(7*x))',
                      'csc(6*x)^2*(7*sin(6*x)*cos(7*x)-6*cos(6*x)*sin(7*x))',
                      array('noFunction'),
                      false, true);

        $this->expect('csc(x)',
                      'csc(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('diff(sin(x))',
                      'diff(sin(x))',
                      array('noFunction'),
                      false, true);

        $this->expect('diff(sin(x),x)',
                      'diff(sin(x),x)',
                      array('noFunction'),
                      false, true);

        $this->expect('diff(x,y)',
                      'diff(x,y)',
                      array('noFunction'),
                      false, true);

        $this->expect('dosomething(x,y,z)',
                      'dosomething(x,y,z)',
                      array('noFunction'),
                      false, true);

        $this->expect('exp(x)',
                      'exp(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('f(x)',
                      'f(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('f(x)(2)',
                      'f(x)(2)',
                      array('noFunction'),
                      false, true);

        $this->expect('fact(13)',
                      'fact(13)',
                      array('noFunction'),
                      false, true);

        $this->expect('floor(x)',
                      'floor(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('gcd(x,y)',
                      'gcd(x,y)',
                      array('noFunction'),
                      false, true);

        $this->expect('gcf(x,y)',
                      'gcf(x,y)',
                      array('noFunction'),
                      false, true);

        $this->expect('i(1+i)',
                      'i(1+i)',
                      array('noFunction'),
                      false, true);

        $this->expect('i(4)',
                      'i(4)',
                      array('noFunction'),
                      false, true);

        $this->expect('int(sin(x))',
                      'int(sin(x))',
                      array('noFunction'),
                      false, true);

        $this->expect('int(x,y)',
                      'int(x,y)',
                      array('noFunction'),
                      false, true);

        $this->expect('len(x)',
                      'len(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('length(x)',
                      'length(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('lg(10^3)',
                      'lg(10^3)',
                      array('noFunction'),
                      false, true);

        $this->expect('lg(x)',
                      'lg(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('lg(x,a)',
                      'lg(x,a)',
                      array('noFunction'),
                      false, true);

        $this->expect('limit(y,x,3)',
                      'limit(y,x,3)',
                      array('noFunction'),
                      false, true);

        $this->expect('ln(x)',
                      'ln(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('log(2x)/x+1/2',
                      'log(2*x)/x+1/2',
                      array('noFunction'),
                      false, true);

        $this->expect('log(x)',
                      'log(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('log10(x)',
                      'log10(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('log_10(x)',
                      'log_10(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('log_2(a)',
                      'log_2(a)',
                      array('noFunction'),
                      false, true);

        $this->expect('log_a(b)*log_b(c)',
                      'log_a(b)*log_b(c)',
                      array('noFunction'),
                      false, true);

        $this->expect('log_x(1/(x+b))',
                      'log_x(1/(x+b))',
                      array('noFunction'),
                      false, true);

        $this->expect('log_x:log_x(a)',
                      'log_x:log_x(a)',
                      array('noFunction'),
                      false, true);

        $this->expect('matrix([a,b],[c,d])',
                      'matrix([a,b],[c,d])',
                      array('noFunction'),
                      false, true);

        $this->expect('mod(x,y)',
                      'mod(x,y)',
                      array('noFunction'),
                      false, true);

        $this->expect('partialdiff(x,y,1)',
                      'partialdiff(x,y,1)',
                      array('noFunction'),
                      false, true);

        $this->expect('perm(x,y)',
                      'perm(x,y)',
                      array('noFunction'),
                      false, true);

        $this->expect('plot(x^2,[x,-1,1])',
                      'plot(x^2,[x,-1,1])',
                      array('noFunction'),
                      false, true);

        $this->expect('plot2d(x^2,[x,-1,1])',
                      'plot2d(x^2,[x,-1,1])',
                      array('noFunction'),
                      false, true);

        $this->expect('product(cos(k*x),k,1,3)',
                      'product(cos(k*x),k,1,3)',
                      array('noFunction'),
                      false, true);

        $this->expect('root(2,-3)',
                      'root(2,-3)',
                      array('noFunction'),
                      false, true);

        $this->expect('root(x)',
                      'root(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('root(x,3)',
                      'root(x,3)',
                      array('noFunction'),
                      false, true);

        $this->expect('sec(x)',
                      'sec(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('sech(x)',
                      'sech(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('set(x, y, z)',
                      'set(x,y,z)',
                      array('noFunction'),
                      false, true);

        $this->expect('sgn(x)',
                      'sgn(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('sign(x)',
                      'sign(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('sim(x)',
                      'sim(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('sin(x)',
                      'sin(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('sinh(x)',
                      'sinh(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('sqr(x)',
                      'sqr(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('sqrt(+x)',
                      'sqrt(+x)',
                      array('noFunction'),
                      false, true);

        $this->expect('sqrt(x)',
                      'sqrt(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('stackvector(a)',
                      'stackvector(a)',
                      array('noFunction'),
                      false, true);

        $this->expect('sum(k^n,n,0,3)',
                      'sum(k^n,n,0,3)',
                      array('noFunction'),
                      false, true);

        $this->expect('switch(x,a,y,b,c)',
                      'switch(x,a,y,b,c)',
                      array('noFunction'),
                      false, true);

        $this->expect('tan(x)',
                      'tan(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('tanh(x)',
                      'tanh(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('x()',
                      'x()',
                      array('noFunction'),
                      false, true);

        $this->expect('x(2+1)',
                      'x(2+1)',
                      array('noFunction'),
                      false, true);

        $this->expect('x(sin(t)+1)',
                      'x(sin(t)+1)',
                      array('noFunction'),
                      false, true);

        $this->expect('x(t+1)',
                      'x(t+1)',
                      array('noFunction'),
                      false, true);

        $this->expect('x(x+1)',
                      'x(x+1)',
                      array('noFunction'),
                      false, true);

        $this->expect('x=+-sqrt(2)',
                      'x=+-sqrt(2)',
                      array('noFunction'),
                      false, true);

        $this->expect('x>1 or (x<1 and t<sin(x))',
                      'x>1 or (x<1 and t<sin(x))',
                      array('noFunction'),
                      false, true);

        $this->expect('x^f(x)',
                      'x^f(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('xsin(1)',
                      'xsin(1)',
                      array('noFunction'),
                      false, true);

        $this->expect('ycos(2)',
                      'ycos(2)',
                      array('noFunction'),
                      false, true);

        $this->expect('|x|',
                      'abs(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('rand(["+","-"])(x,y)',
                      'rand(["+","-"])(x,y)',
                      array('noFunction'),
                      false, true);

        $this->expect('rand(["sin","cos","system"])(x)',
                      'rand(["sin","cos","system"])(x)',
                      array('noFunction'),
                      false, true);

    }

    public function test_affected_units() {
        $this->security = new stack_cas_security(true);
        $this->filter = stack_parsing_rule_factory::get_by_common_name('542_no_functions_at_all');

        $this->expect('"+"(a,b)',
                      '"+"(a,b)',
                      array('noFunction'),
                      false, true);

        $this->expect("'diff(x,y)",
                      "'diff(x,y)",
                      array('noFunction'),
                      false, true);

        $this->expect("'int(x,y)",
                      "'int(x,y)",
                      array('noFunction'),
                      false, true);

        $this->expect('(-b+-sqrt(b^2))/(2*a)',
                      '(-b+-sqrt(b^2))/(2*a)',
                      array('noFunction'),
                      false, true);

        $this->expect('(x+2)(x+3)',
                      '(x+2)(x+3)',
                      array('noFunction'),
                      false, true);

        $this->expect('-(1/512) + i(sqrt(3)/512)',
                      '-(1/512)+i(sqrt(3)/512)',
                      array('noFunction'),
                      false, true);

        $this->expect('-3x(1+x)',
                      '-3*x(1+x)',
                      array('noFunction'),
                      false, true);

        $this->expect('-b(5-b)',
                      '-b(5-b)',
                      array('noFunction'),
                      false, true);

        $this->expect('-x(1+x)',
                      '-x(1+x)',
                      array('noFunction'),
                      false, true);

        $this->expect('1-x(1+x)',
                      '1-x(1+x)',
                      array('noFunction'),
                      false, true);

        $this->expect('1/sin(+x)',
                      '1/sin(+x)',
                      array('noFunction'),
                      false, true);

        $this->expect('2+log_x(1/(x+b))*x^2',
                      '2+log_x(1/(x+b))*x^2',
                      array('noFunction'),
                      false, true);

        $this->expect('3b+5/a(x)',
                      '3*b+5/a(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('7x(2+1)',
                      '7*x(2+1)',
                      array('noFunction'),
                      false, true);

        $this->expect('Bgcd(3,2)',
                      'Bgcd(3,2)',
                      array('noFunction'),
                      false, true);

        $this->expect('In(x)',
                      'In(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('Sin(x)',
                      'Sin(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('a(x)',
                      'a(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('a/(a(x+1)+2)',
                      'a/(a(x+1)+2)',
                      array('noFunction'),
                      false, true);

        $this->expect('abs(13)',
                      'abs(13)',
                      array('noFunction'),
                      false, true);

        $this->expect('abs(x)',
                      'abs(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('arcsin(x)',
                      'arcsin(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('asin(x)',
                      'asin(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('asinh(x)',
                      'asinh(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('b(b+1)',
                      'b(b+1)',
                      array('noFunction'),
                      false, true);

        $this->expect('b/a(x)',
                      'b/a(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('bsin(t)',
                      'bsin(t)',
                      array('noFunction'),
                      false, true);

        $this->expect('ceiling(x)',
                      'ceiling(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('comb(x,y)',
                      'comb(x,y)',
                      array('noFunction'),
                      false, true);

        $this->expect('cos(2x)(x+1)',
                      'cos(2*x)(x+1)',
                      array('noFunction'),
                      false, true);

        $this->expect('cos(x)',
                      'cos(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('cosec(x)',
                      'cosec(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('cosech(x)',
                      'cosech(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('cosh(x)',
                      'cosh(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('cot(x)',
                      'cot(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('coth(x)',
                      'coth(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('csc(6*x)^2*(7*sin(6*x)*cos(7*x)-6*cos(6*x)*sin(7*x))',
                      'csc(6*x)^2*(7*sin(6*x)*cos(7*x)-6*cos(6*x)*sin(7*x))',
                      array('noFunction'),
                      false, true);

        $this->expect('csc(x)',
                      'csc(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('diff(sin(x))',
                      'diff(sin(x))',
                      array('noFunction'),
                      false, true);

        $this->expect('diff(sin(x),x)',
                      'diff(sin(x),x)',
                      array('noFunction'),
                      false, true);

        $this->expect('diff(x,y)',
                      'diff(x,y)',
                      array('noFunction'),
                      false, true);

        $this->expect('dosomething(x,y,z)',
                      'dosomething(x,y,z)',
                      array('noFunction'),
                      false, true);

        $this->expect('exp(x)',
                      'exp(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('f(x)',
                      'f(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('f(x)(2)',
                      'f(x)(2)',
                      array('noFunction'),
                      false, true);

        $this->expect('fact(13)',
                      'fact(13)',
                      array('noFunction'),
                      false, true);

        $this->expect('floor(x)',
                      'floor(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('gcd(x,y)',
                      'gcd(x,y)',
                      array('noFunction'),
                      false, true);

        $this->expect('gcf(x,y)',
                      'gcf(x,y)',
                      array('noFunction'),
                      false, true);

        $this->expect('i(1+i)',
                      'i(1+i)',
                      array('noFunction'),
                      false, true);

        $this->expect('i(4)',
                      'i(4)',
                      array('noFunction'),
                      false, true);

        $this->expect('int(sin(x))',
                      'int(sin(x))',
                      array('noFunction'),
                      false, true);

        $this->expect('int(x,y)',
                      'int(x,y)',
                      array('noFunction'),
                      false, true);

        $this->expect('len(x)',
                      'len(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('length(x)',
                      'length(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('lg(10^3)',
                      'lg(10^3)',
                      array('noFunction'),
                      false, true);

        $this->expect('lg(x)',
                      'lg(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('lg(x,a)',
                      'lg(x,a)',
                      array('noFunction'),
                      false, true);

        $this->expect('limit(y,x,3)',
                      'limit(y,x,3)',
                      array('noFunction'),
                      false, true);

        $this->expect('ln(x)',
                      'ln(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('log(2x)/x+1/2',
                      'log(2*x)/x+1/2',
                      array('noFunction'),
                      false, true);

        $this->expect('log(x)',
                      'log(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('log10(x)',
                      'log10(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('log_10(x)',
                      'log_10(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('log_2(a)',
                      'log_2(a)',
                      array('noFunction'),
                      false, true);

        $this->expect('log_a(b)*log_b(c)',
                      'log_a(b)*log_b(c)',
                      array('noFunction'),
                      false, true);

        $this->expect('log_x(1/(x+b))',
                      'log_x(1/(x+b))',
                      array('noFunction'),
                      false, true);

        $this->expect('log_x:log_x(a)',
                      'log_x:log_x(a)',
                      array('noFunction'),
                      false, true);

        $this->expect('matrix([a,b],[c,d])',
                      'matrix([a,b],[c,d])',
                      array('noFunction'),
                      false, true);

        $this->expect('mod(x,y)',
                      'mod(x,y)',
                      array('noFunction'),
                      false, true);

        $this->expect('partialdiff(x,y,1)',
                      'partialdiff(x,y,1)',
                      array('noFunction'),
                      false, true);

        $this->expect('perm(x,y)',
                      'perm(x,y)',
                      array('noFunction'),
                      false, true);

        $this->expect('plot(x^2,[x,-1,1])',
                      'plot(x^2,[x,-1,1])',
                      array('noFunction'),
                      false, true);

        $this->expect('plot2d(x^2,[x,-1,1])',
                      'plot2d(x^2,[x,-1,1])',
                      array('noFunction'),
                      false, true);

        $this->expect('product(cos(k*x),k,1,3)',
                      'product(cos(k*x),k,1,3)',
                      array('noFunction'),
                      false, true);

        $this->expect('root(2,-3)',
                      'root(2,-3)',
                      array('noFunction'),
                      false, true);

        $this->expect('root(x)',
                      'root(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('root(x,3)',
                      'root(x,3)',
                      array('noFunction'),
                      false, true);

        $this->expect('sec(x)',
                      'sec(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('sech(x)',
                      'sech(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('set(x, y, z)',
                      'set(x,y,z)',
                      array('noFunction'),
                      false, true);

        $this->expect('sgn(x)',
                      'sgn(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('sign(x)',
                      'sign(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('sim(x)',
                      'sim(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('sin(x)',
                      'sin(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('sinh(x)',
                      'sinh(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('sqr(x)',
                      'sqr(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('sqrt(+x)',
                      'sqrt(+x)',
                      array('noFunction'),
                      false, true);

        $this->expect('sqrt(x)',
                      'sqrt(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('stackvector(a)',
                      'stackvector(a)',
                      array('noFunction'),
                      false, true);

        $this->expect('sum(k^n,n,0,3)',
                      'sum(k^n,n,0,3)',
                      array('noFunction'),
                      false, true);

        $this->expect('switch(x,a,y,b,c)',
                      'switch(x,a,y,b,c)',
                      array('noFunction'),
                      false, true);

        $this->expect('tan(x)',
                      'tan(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('tanh(x)',
                      'tanh(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('x()',
                      'x()',
                      array('noFunction'),
                      false, true);

        $this->expect('x(2+1)',
                      'x(2+1)',
                      array('noFunction'),
                      false, true);

        $this->expect('x(sin(t)+1)',
                      'x(sin(t)+1)',
                      array('noFunction'),
                      false, true);

        $this->expect('x(t+1)',
                      'x(t+1)',
                      array('noFunction'),
                      false, true);

        $this->expect('x(x+1)',
                      'x(x+1)',
                      array('noFunction'),
                      false, true);

        $this->expect('x=+-sqrt(2)',
                      'x=+-sqrt(2)',
                      array('noFunction'),
                      false, true);

        $this->expect('x>1 or (x<1 and t<sin(x))',
                      'x>1 or (x<1 and t<sin(x))',
                      array('noFunction'),
                      false, true);

        $this->expect('x^f(x)',
                      'x^f(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('xsin(1)',
                      'xsin(1)',
                      array('noFunction'),
                      false, true);

        $this->expect('ycos(2)',
                      'ycos(2)',
                      array('noFunction'),
                      false, true);

        $this->expect('|x|',
                      'abs(x)',
                      array('noFunction'),
                      false, true);

        $this->expect('rand(["+","-"])(x,y)',
                      'rand(["+","-"])(x,y)',
                      array('noFunction'),
                      false, true);

        $this->expect('rand(["sin","cos","system"])(x)',
                      'rand(["sin","cos","system"])(x)',
                      array('noFunction'),
                      false, true);

    }

    public function test_non_affected_units() {
        $this->security = new stack_cas_security(true);
        $this->filter = stack_parsing_rule_factory::get_by_common_name('542_no_functions_at_all');

        $this->expect('"1+1"',
                      '"1+1"',
                      array(),
                      true, false);

        $this->expect('"Hello world"',
                      '"Hello world"',
                      array(),
                      true, false);

        $this->expect('%e^x',
                      '%e^x',
                      array(),
                      true, false);

        $this->expect('2pi r^2',
                      '2*pi*r^2',
                      array(),
                      true, false);

        $this->expect('2pir^2',
                      '2*pir^2',
                      array(),
                      true, false);

        $this->expect('(()x)',
                      '(()*x)',
                      array(),
                      true, false);

        $this->expect('((x))',
                      '((x))',
                      array(),
                      true, false);

        $this->expect('()x',
                      '()*x',
                      array(),
                      true, false);

        $this->expect('(+1)',
                      '(+1)',
                      array(),
                      true, false);

        $this->expect('(-1)',
                      '(-1)',
                      array(),
                      true, false);

        $this->expect('(-x)*y',
                      '(-x)*y',
                      array(),
                      true, false);

        $this->expect('(1+i)*x',
                      '(1+i)*x',
                      array(),
                      true, false);

        $this->expect('(1+i)+x',
                      '(1+i)+x',
                      array(),
                      true, false);

        $this->expect('(a,b,c)',
                      '(a,b,c)',
                      array(),
                      true, false);

        $this->expect('(a-b)-c',
                      '(a-b)-c',
                      array(),
                      true, false);

        $this->expect('(x)',
                      '(x)',
                      array(),
                      true, false);

        $this->expect('(x*y)*z',
                      '(x*y)*z',
                      array(),
                      true, false);

        $this->expect('(x+2)3',
                      '(x+2)*3',
                      array(),
                      true, false);

        $this->expect('(x+2)y',
                      '(x+2)*y',
                      array(),
                      true, false);

        $this->expect('(x+y)+z',
                      '(x+y)+z',
                      array(),
                      true, false);

        $this->expect('(x+y)^z',
                      '(x+y)^z',
                      array(),
                      true, false);

        $this->expect('(x-y)+z',
                      '(x-y)+z',
                      array(),
                      true, false);

        $this->expect('(x/y)/z',
                      '(x/y)/z',
                      array(),
                      true, false);

        $this->expect('+-1',
                      '+-1',
                      array(),
                      true, false);

        $this->expect('+0.2',
                      '+0.2',
                      array(),
                      true, false);

        $this->expect('+1',
                      '+1',
                      array(),
                      true, false);

        $this->expect('+e',
                      '+e',
                      array(),
                      true, false);

        $this->expect('+i',
                      '+i',
                      array(),
                      true, false);

        $this->expect('+pi',
                      '+pi',
                      array(),
                      true, false);

        $this->expect('+x',
                      '+x',
                      array(),
                      true, false);

        $this->expect('-1',
                      '-1',
                      array(),
                      true, false);

        $this->expect('-1234',
                      '-1234',
                      array(),
                      true, false);

        $this->expect('-0.2',
                      '-0.2',
                      array(),
                      true, false);

        $this->expect('-10/-1',
                      '-10/-1',
                      array(),
                      true, false);

        $this->expect('-3(x+1)',
                      '-3*(x+1)',
                      array(),
                      true, false);

        $this->expect('-3+i',
                      '-3+i',
                      array(),
                      true, false);

        $this->expect('-e',
                      '-e',
                      array(),
                      true, false);

        $this->expect('-i',
                      '-i',
                      array(),
                      true, false);

        $this->expect('-pi',
                      '-pi',
                      array(),
                      true, false);

        $this->expect('-x',
                      '-x',
                      array(),
                      true, false);

        $this->expect('-x[3]',
                      '-x[3]',
                      array(),
                      true, false);

        $this->expect('.1',
                      '.1',
                      array(),
                      true, false);

        $this->expect('0..1',
                      '0..1',
                      array(),
                      true, false);

        $this->expect('0.1..1.2',
                      '0.1..1.2',
                      array(),
                      true, false);

        $this->expect('1',
                      '1',
                      array(),
                      true, false);

        $this->expect('1234',
                      '1234',
                      array(),
                      true, false);

        $this->expect('1 x',
                      '1*x',
                      array(),
                      true, false);

        $this->expect('1+2i',
                      '1+2*i',
                      array(),
                      true, false);

        $this->expect('1+i',
                      '1+i',
                      array(),
                      true, false);

        $this->expect('1/0',
                      '1/0',
                      array(),
                      true, false);

        $this->expect('1/2',
                      '1/2',
                      array(),
                      true, false);

        $this->expect('1<=x<y^2',
                      '1<=x<y^2',
                      array(),
                      true, false);

        $this->expect('1<x<3',
                      '1<x<3',
                      array(),
                      true, false);

        $this->expect('1E+3',
                      '1E+3',
                      array(),
                      true, false);

        $this->expect('1E3',
                      '1E3',
                      array(),
                      true, false);

        $this->expect('1 E 3',
                      '1*E*3',
                      array(),
                      true, false);

        $this->expect('1x',
                      '1*x',
                      array(),
                      true, false);

        $this->expect('2*e',
                      '2*e',
                      array(),
                      true, false);

        $this->expect('2*i',
                      '2*i',
                      array(),
                      true, false);

        $this->expect('2*i^3',
                      '2*i^3',
                      array(),
                      true, false);

        $this->expect('2*pi',
                      '2*pi',
                      array(),
                      true, false);

        $this->expect('2+3(x+1)',
                      '2+3*(x+1)',
                      array(),
                      true, false);

        $this->expect('2/4',
                      '2/4',
                      array(),
                      true, false);

        $this->expect('2^y*x',
                      '2^y*x',
                      array(),
                      true, false);

        $this->expect('3(x+1)',
                      '3*(x+1)',
                      array(),
                      true, false);

        $this->expect('3-i',
                      '3-i',
                      array(),
                      true, false);

        $this->expect('3beta_47',
                      '3*beta_47',
                      array(),
                      true, false);

        $this->expect('3e-2',
                      '3E-2',
                      array(),
                      true, false);

        $this->expect('3e2',
                      '3E2',
                      array(),
                      true, false);

        $this->expect('3E2',
                      '3E2',
                      array(),
                      true, false);

        $this->expect('X',
                      'X',
                      array(),
                      true, false);

        $this->expect('["a"]',
                      '["a"]',
                      array(),
                      true, false);

        $this->expect('[+1,+2]',
                      '[+1,+2]',
                      array(),
                      true, false);

        $this->expect('[-1,-2]',
                      '[-1,-2]',
                      array(),
                      true, false);

        $this->expect('[1 < x,y < 1 or y > 7]',
                      '[1<x,y<1 or y>7]',
                      array(),
                      true, false);

        $this->expect('[1,+2]',
                      '[1,+2]',
                      array(),
                      true, false);

        $this->expect('[1,-2]',
                      '[1,-2]',
                      array(),
                      true, false);

        $this->expect('[1,2,3.4]',
                      '[1,2,3.4]',
                      array(),
                      true, false);

        $this->expect('[1,true,"a"]',
                      '[1,true,"a"]',
                      array(),
                      true, false);

        $this->expect('[1<x,1<y<3]',
                      '[1<x,1<y<3]',
                      array(),
                      true, false);

        $this->expect('[1<x,x<3]',
                      '[1<x,x<3]',
                      array(),
                      true, false);

        $this->expect('[1]',
                      '[1]',
                      array(),
                      true, false);

        $this->expect('[[1,2],[3,4]]',
                      '[[1,2],[3,4]]',
                      array(),
                      true, false);

        $this->expect('[]',
                      '[]',
                      array(),
                      true, false);

        $this->expect('[x, y, z ]',
                      '[x,y,z]',
                      array(),
                      true, false);

        $this->expect('a ** b',
                      'a**b',
                      array(),
                      true, false);

        $this->expect('a +++ b',
                      'a+++b',
                      array(),
                      true, false);

        $this->expect('a --- b',
                      'a---b',
                      array(),
                      true, false);

        $this->expect('a++b',
                      'a++b',
                      array(),
                      true, false);

        $this->expect('a+-b',
                      'a+-b',
                      array(),
                      true, false);

        $this->expect('a,b,c',
                      'a,b=true,c=true',
                      array(),
                      true, false);

        $this->expect('a-(b-c)',
                      'a-(b-c)',
                      array(),
                      true, false);

        $this->expect('a-+b',
                      'a-+b',
                      array(),
                      true, false);

        $this->expect('a/b/c',
                      'a/b/c',
                      array(),
                      true, false);

        $this->expect('a1',
                      'a1',
                      array(),
                      true, false);

        $this->expect('a9b',
                      'a9b',
                      array(),
                      true, false);

        $this->expect('ab98cd',
                      'ab98cd',
                      array(),
                      true, false);

        $this->expect('aXy1',
                      'aXy1',
                      array(),
                      true, false);

        $this->expect('a[1,2]',
                      'a[1,2]',
                      array(),
                      true, false);

        $this->expect('a[2]',
                      'a[2]',
                      array(),
                      true, false);

        $this->expect('a[n+1]',
                      'a[n+1]',
                      array(),
                      true, false);

        $this->expect('a^-b',
                      'a^-b',
                      array(),
                      true, false);

        $this->expect('a^b',
                      'a^b',
                      array(),
                      true, false);

        $this->expect('a_b',
                      'a_b',
                      array(),
                      true, false);

        $this->expect('alpha',
                      'alpha',
                      array(),
                      true, false);

        $this->expect('beta',
                      'beta',
                      array(),
                      true, false);

        $this->expect('beta_47',
                      'beta_47',
                      array(),
                      true, false);

        $this->expect('chi',
                      'chi',
                      array(),
                      true, false);

        $this->expect('cos^2(x)',
                      'cos^2*(x)',
                      array(),
                      true, false);

        $this->expect('delta',
                      'delta',
                      array(),
                      true, false);

        $this->expect('e',
                      'e',
                      array(),
                      true, false);

        $this->expect('e*2',
                      'e*2',
                      array(),
                      true, false);

        $this->expect('e^x',
                      'e^x',
                      array(),
                      true, false);

        $this->expect('epsilon',
                      'epsilon',
                      array(),
                      true, false);

        $this->expect('eta',
                      'eta',
                      array(),
                      true, false);

        $this->expect('false',
                      'false',
                      array(),
                      true, false);

        $this->expect('gamma',
                      'gamma',
                      array(),
                      true, false);

        $this->expect('i',
                      'i',
                      array(),
                      true, false);

        $this->expect('i*2',
                      'i*2',
                      array(),
                      true, false);

        $this->expect('inf',
                      'inf',
                      array(),
                      true, false);

        $this->expect('iota',
                      'iota',
                      array(),
                      true, false);

        $this->expect('j',
                      'j',
                      array(),
                      true, false);

        $this->expect('kappa',
                      'kappa',
                      array(),
                      true, false);

        $this->expect('lambda',
                      'lambda',
                      array(),
                      true, false);

        $this->expect('ln*x',
                      'ln*x',
                      array(),
                      true, false);

        $this->expect('mu',
                      'mu',
                      array(),
                      true, false);

        $this->expect('not x',
                      'not x',
                      array(),
                      true, false);

        $this->expect('nu',
                      'nu',
                      array(),
                      true, false);

        $this->expect('omega',
                      'omega',
                      array(),
                      true, false);

        $this->expect('omicron',
                      'omicron',
                      array(),
                      true, false);

        $this->expect('p=?*s',
                      'p=QMCHAR*s',
                      array(),
                      true, false);

        $this->expect('phi',
                      'phi',
                      array(),
                      true, false);

        $this->expect('pi',
                      'pi',
                      array(),
                      true, false);

        $this->expect('pi*2',
                      'pi*2',
                      array(),
                      true, false);

        $this->expect('psi',
                      'psi',
                      array(),
                      true, false);

        $this->expect('rho',
                      'rho',
                      array(),
                      true, false);

        $this->expect('rho*z*V/(4*pi*epsilon[0]*(R^2+z^2)^(3/2))',
                      'rho*z*V/(4*pi*epsilon[0]*(R^2+z^2)^(3/2))',
                      array(),
                      true, false);

        $this->expect('sigma',
                      'sigma',
                      array(),
                      true, false);

        $this->expect('sin',
                      'sin',
                      array(),
                      true, false);

        $this->expect('sin x',
                      'sin*x',
                      array(),
                      true, false);

        $this->expect('sin*2*x',
                      'sin*2*x',
                      array(),
                      true, false);

        $this->expect('sin[2*x]',
                      'sin[2*x]',
                      array(),
                      true, false);

        $this->expect('sin^-1(x)',
                      'sin^-1*(x)',
                      array(),
                      true, false);

        $this->expect('tau',
                      'tau',
                      array(),
                      true, false);

        $this->expect('theta',
                      'theta',
                      array(),
                      true, false);

        $this->expect('true',
                      'true',
                      array(),
                      true, false);

        $this->expect('upsilon',
                      'upsilon',
                      array(),
                      true, false);

        $this->expect('x',
                      'x',
                      array(),
                      true, false);

        $this->expect('x * y',
                      'x*y',
                      array(),
                      true, false);

        $this->expect('x + 1',
                      'x+1',
                      array(),
                      true, false);

        $this->expect('x + y',
                      'x+y',
                      array(),
                      true, false);

        $this->expect('x - y',
                      'x-y',
                      array(),
                      true, false);

        $this->expect('x / y',
                      'x/y',
                      array(),
                      true, false);

        $this->expect('x < y',
                      'x<y',
                      array(),
                      true, false);

        $this->expect('x <= y',
                      'x<=y',
                      array(),
                      true, false);

        $this->expect('x = y',
                      'x=y',
                      array(),
                      true, false);

        $this->expect('x > y',
                      'x>y',
                      array(),
                      true, false);

        $this->expect('x >= y',
                      'x>=y',
                      array(),
                      true, false);

        $this->expect('x ^ y',
                      'x^y',
                      array(),
                      true, false);

        $this->expect('x and',
                      'x*and',
                      array(),
                      true, false);

        $this->expect('x and y',
                      'x and y',
                      array(),
                      true, false);

        $this->expect('x divides y',
                      'x*divides*y',
                      array(),
                      true, false);

        $this->expect('x or y',
                      'x or y',
                      array(),
                      true, false);

        $this->expect('x xor y',
                      'x*xor*y',
                      array(),
                      true, false);

        $this->expect('x y',
                      'x*y',
                      array(),
                      true, false);

        $this->expect('x!',
                      'x!',
                      array(),
                      true, false);

        $this->expect('x*(-y)',
                      'x*(-y)',
                      array(),
                      true, false);

        $this->expect('x*(y*z)',
                      'x*(y*z)',
                      array(),
                      true, false);

        $this->expect('x*2^y',
                      'x*2^y',
                      array(),
                      true, false);

        $this->expect('x*divides*y',
                      'x*divides*y',
                      array(),
                      true, false);

        $this->expect('x*i^3',
                      'x*i^3',
                      array(),
                      true, false);

        $this->expect('x*y*z',
                      'x*y*z',
                      array(),
                      true, false);

        $this->expect('x*y^z',
                      'x*y^z',
                      array(),
                      true, false);

        $this->expect('x+ 1',
                      'x+1',
                      array(),
                      true, false);

        $this->expect('x+(y+z)',
                      'x+(y+z)',
                      array(),
                      true, false);

        $this->expect('x+(y^z)',
                      'x+(y^z)',
                      array(),
                      true, false);

        $this->expect('x+1',
                      'x+1',
                      array(),
                      true, false);

        $this->expect('x+y+z',
                      'x+y+z',
                      array(),
                      true, false);

        $this->expect('x-(y+z)',
                      'x-(y+z)',
                      array(),
                      true, false);

        $this->expect('x/(y/z)',
                      'x/(y/z)',
                      array(),
                      true, false);

        $this->expect('x/y/z',
                      'x/y/z',
                      array(),
                      true, false);

        $this->expect('x1',
                      'x1',
                      array(),
                      true, false);

        $this->expect('x<1 and x>1',
                      'x<1 and x>1',
                      array(),
                      true, false);

        $this->expect('x=1 or 2',
                      'x=1 or 2',
                      array(),
                      true, false);

        $this->expect('x=1 or 2 or 3',
                      'x=1 or 2 or 3',
                      array(),
                      true, false);

        $this->expect('x=1 or x=2',
                      'x=1 or x=2',
                      array(),
                      true, false);

        $this->expect('x^(-(y+z))',
                      'x^(-(y+z))',
                      array(),
                      true, false);

        $this->expect('x^(-y)',
                      'x^(-y)',
                      array(),
                      true, false);

        $this->expect('x^(y+z)',
                      'x^(y+z)',
                      array(),
                      true, false);

        $this->expect('x^(y/z)',
                      'x^(y/z)',
                      array(),
                      true, false);

        $this->expect('x^-1',
                      'x^-1',
                      array(),
                      true, false);

        $this->expect('x^-y',
                      'x^-y',
                      array(),
                      true, false);

        $this->expect('x^7/7-2*x^6/3-4*x^3/3',
                      'x^7/7-2*x^6/3-4*x^3/3',
                      array(),
                      true, false);

        $this->expect('x^y',
                      'x^y',
                      array(),
                      true, false);

        $this->expect('x^y^z',
                      'x^y^z',
                      array(),
                      true, false);

        $this->expect('x_1',
                      'x_1',
                      array(),
                      true, false);

        $this->expect('x_y',
                      'x_y',
                      array(),
                      true, false);

        $this->expect('xy_zw',
                      'xy_zw',
                      array(),
                      true, false);

        $this->expect('xy_12',
                      'xy_12',
                      array(),
                      true, false);

        $this->expect('xi',
                      'xi',
                      array(),
                      true, false);

        $this->expect('xy',
                      'xy',
                      array(),
                      true, false);

        $this->expect('y^2-2*y-0.5',
                      'y^2-2*y-0.5',
                      array(),
                      true, false);

        $this->expect('y^2-2*y-8',
                      'y^2-2*y-8',
                      array(),
                      true, false);

        $this->expect('y^3-2*y^2-8*y',
                      'y^3-2*y^2-8*y',
                      array(),
                      true, false);

        $this->expect('y^z * x',
                      'y^z*x',
                      array(),
                      true, false);

        $this->expect('zeta',
                      'zeta',
                      array(),
                      true, false);

        $this->expect('{1,2,3.4}',
                      '{1,2,3.4}',
                      array(),
                      true, false);

        $this->expect('{1}',
                      '{1}',
                      array(),
                      true, false);

        $this->expect('{x, y, z }',
                      '{x,y,z}',
                      array(),
                      true, false);

        $this->expect('{}',
                      '{}',
                      array(),
                      true, false);

    }

    public function test_non_affected_no_units() {
        $this->security = new stack_cas_security(false);
        $this->filter = stack_parsing_rule_factory::get_by_common_name('542_no_functions_at_all');

        $this->expect('"1+1"',
                      '"1+1"',
                      array(),
                      true, false);

        $this->expect('"Hello world"',
                      '"Hello world"',
                      array(),
                      true, false);

        $this->expect('%e^x',
                      '%e^x',
                      array(),
                      true, false);

        $this->expect('2pi r^2',
                      '2*pi*r^2',
                      array(),
                      true, false);

        $this->expect('2pir^2',
                      '2*pir^2',
                      array(),
                      true, false);

        $this->expect('(()x)',
                      '(()*x)',
                      array(),
                      true, false);

        $this->expect('((x))',
                      '((x))',
                      array(),
                      true, false);

        $this->expect('()x',
                      '()*x',
                      array(),
                      true, false);

        $this->expect('(+1)',
                      '(+1)',
                      array(),
                      true, false);

        $this->expect('(-1)',
                      '(-1)',
                      array(),
                      true, false);

        $this->expect('(-x)*y',
                      '(-x)*y',
                      array(),
                      true, false);

        $this->expect('(1+i)*x',
                      '(1+i)*x',
                      array(),
                      true, false);

        $this->expect('(1+i)+x',
                      '(1+i)+x',
                      array(),
                      true, false);

        $this->expect('(a,b,c)',
                      '(a,b,c)',
                      array(),
                      true, false);

        $this->expect('(a-b)-c',
                      '(a-b)-c',
                      array(),
                      true, false);

        $this->expect('(x)',
                      '(x)',
                      array(),
                      true, false);

        $this->expect('(x*y)*z',
                      '(x*y)*z',
                      array(),
                      true, false);

        $this->expect('(x+2)3',
                      '(x+2)*3',
                      array(),
                      true, false);

        $this->expect('(x+2)y',
                      '(x+2)*y',
                      array(),
                      true, false);

        $this->expect('(x+y)+z',
                      '(x+y)+z',
                      array(),
                      true, false);

        $this->expect('(x+y)^z',
                      '(x+y)^z',
                      array(),
                      true, false);

        $this->expect('(x-y)+z',
                      '(x-y)+z',
                      array(),
                      true, false);

        $this->expect('(x/y)/z',
                      '(x/y)/z',
                      array(),
                      true, false);

        $this->expect('+-1',
                      '+-1',
                      array(),
                      true, false);

        $this->expect('+0.2',
                      '+0.2',
                      array(),
                      true, false);

        $this->expect('+1',
                      '+1',
                      array(),
                      true, false);

        $this->expect('+e',
                      '+e',
                      array(),
                      true, false);

        $this->expect('+i',
                      '+i',
                      array(),
                      true, false);

        $this->expect('+pi',
                      '+pi',
                      array(),
                      true, false);

        $this->expect('+x',
                      '+x',
                      array(),
                      true, false);

        $this->expect('-1',
                      '-1',
                      array(),
                      true, false);

        $this->expect('-1234',
                      '-1234',
                      array(),
                      true, false);

        $this->expect('-0.2',
                      '-0.2',
                      array(),
                      true, false);

        $this->expect('-10/-1',
                      '-10/-1',
                      array(),
                      true, false);

        $this->expect('-3(x+1)',
                      '-3*(x+1)',
                      array(),
                      true, false);

        $this->expect('-3+i',
                      '-3+i',
                      array(),
                      true, false);

        $this->expect('-e',
                      '-e',
                      array(),
                      true, false);

        $this->expect('-i',
                      '-i',
                      array(),
                      true, false);

        $this->expect('-pi',
                      '-pi',
                      array(),
                      true, false);

        $this->expect('-x',
                      '-x',
                      array(),
                      true, false);

        $this->expect('-x[3]',
                      '-x[3]',
                      array(),
                      true, false);

        $this->expect('.1',
                      '.1',
                      array(),
                      true, false);

        $this->expect('0..1',
                      '0..1',
                      array(),
                      true, false);

        $this->expect('0.1..1.2',
                      '0.1..1.2',
                      array(),
                      true, false);

        $this->expect('1',
                      '1',
                      array(),
                      true, false);

        $this->expect('1234',
                      '1234',
                      array(),
                      true, false);

        $this->expect('1 x',
                      '1*x',
                      array(),
                      true, false);

        $this->expect('1+2i',
                      '1+2*i',
                      array(),
                      true, false);

        $this->expect('1+i',
                      '1+i',
                      array(),
                      true, false);

        $this->expect('1/0',
                      '1/0',
                      array(),
                      true, false);

        $this->expect('1/2',
                      '1/2',
                      array(),
                      true, false);

        $this->expect('1<=x<y^2',
                      '1<=x<y^2',
                      array(),
                      true, false);

        $this->expect('1<x<3',
                      '1<x<3',
                      array(),
                      true, false);

        $this->expect('1E+3',
                      '1E+3',
                      array(),
                      true, false);

        $this->expect('1E3',
                      '1E3',
                      array(),
                      true, false);

        $this->expect('1 E 3',
                      '1*E*3',
                      array(),
                      true, false);

        $this->expect('1x',
                      '1*x',
                      array(),
                      true, false);

        $this->expect('2*e',
                      '2*e',
                      array(),
                      true, false);

        $this->expect('2*i',
                      '2*i',
                      array(),
                      true, false);

        $this->expect('2*i^3',
                      '2*i^3',
                      array(),
                      true, false);

        $this->expect('2*pi',
                      '2*pi',
                      array(),
                      true, false);

        $this->expect('2+3(x+1)',
                      '2+3*(x+1)',
                      array(),
                      true, false);

        $this->expect('2/4',
                      '2/4',
                      array(),
                      true, false);

        $this->expect('2^y*x',
                      '2^y*x',
                      array(),
                      true, false);

        $this->expect('3(x+1)',
                      '3*(x+1)',
                      array(),
                      true, false);

        $this->expect('3-i',
                      '3-i',
                      array(),
                      true, false);

        $this->expect('3beta_47',
                      '3*beta_47',
                      array(),
                      true, false);

        $this->expect('3e-2',
                      '3E-2',
                      array(),
                      true, false);

        $this->expect('3e2',
                      '3E2',
                      array(),
                      true, false);

        $this->expect('3E2',
                      '3E2',
                      array(),
                      true, false);

        $this->expect('X',
                      'X',
                      array(),
                      true, false);

        $this->expect('["a"]',
                      '["a"]',
                      array(),
                      true, false);

        $this->expect('[+1,+2]',
                      '[+1,+2]',
                      array(),
                      true, false);

        $this->expect('[-1,-2]',
                      '[-1,-2]',
                      array(),
                      true, false);

        $this->expect('[1 < x,y < 1 or y > 7]',
                      '[1<x,y<1 or y>7]',
                      array(),
                      true, false);

        $this->expect('[1,+2]',
                      '[1,+2]',
                      array(),
                      true, false);

        $this->expect('[1,-2]',
                      '[1,-2]',
                      array(),
                      true, false);

        $this->expect('[1,2,3.4]',
                      '[1,2,3.4]',
                      array(),
                      true, false);

        $this->expect('[1,true,"a"]',
                      '[1,true,"a"]',
                      array(),
                      true, false);

        $this->expect('[1<x,1<y<3]',
                      '[1<x,1<y<3]',
                      array(),
                      true, false);

        $this->expect('[1<x,x<3]',
                      '[1<x,x<3]',
                      array(),
                      true, false);

        $this->expect('[1]',
                      '[1]',
                      array(),
                      true, false);

        $this->expect('[[1,2],[3,4]]',
                      '[[1,2],[3,4]]',
                      array(),
                      true, false);

        $this->expect('[]',
                      '[]',
                      array(),
                      true, false);

        $this->expect('[x, y, z ]',
                      '[x,y,z]',
                      array(),
                      true, false);

        $this->expect('a ** b',
                      'a**b',
                      array(),
                      true, false);

        $this->expect('a +++ b',
                      'a+++b',
                      array(),
                      true, false);

        $this->expect('a --- b',
                      'a---b',
                      array(),
                      true, false);

        $this->expect('a++b',
                      'a++b',
                      array(),
                      true, false);

        $this->expect('a+-b',
                      'a+-b',
                      array(),
                      true, false);

        $this->expect('a,b,c',
                      'a,b=true,c=true',
                      array(),
                      true, false);

        $this->expect('a-(b-c)',
                      'a-(b-c)',
                      array(),
                      true, false);

        $this->expect('a-+b',
                      'a-+b',
                      array(),
                      true, false);

        $this->expect('a/b/c',
                      'a/b/c',
                      array(),
                      true, false);

        $this->expect('a1',
                      'a1',
                      array(),
                      true, false);

        $this->expect('a9b',
                      'a9b',
                      array(),
                      true, false);

        $this->expect('ab98cd',
                      'ab98cd',
                      array(),
                      true, false);

        $this->expect('aXy1',
                      'aXy1',
                      array(),
                      true, false);

        $this->expect('a[1,2]',
                      'a[1,2]',
                      array(),
                      true, false);

        $this->expect('a[2]',
                      'a[2]',
                      array(),
                      true, false);

        $this->expect('a[n+1]',
                      'a[n+1]',
                      array(),
                      true, false);

        $this->expect('a^-b',
                      'a^-b',
                      array(),
                      true, false);

        $this->expect('a^b',
                      'a^b',
                      array(),
                      true, false);

        $this->expect('a_b',
                      'a_b',
                      array(),
                      true, false);

        $this->expect('alpha',
                      'alpha',
                      array(),
                      true, false);

        $this->expect('beta',
                      'beta',
                      array(),
                      true, false);

        $this->expect('beta_47',
                      'beta_47',
                      array(),
                      true, false);

        $this->expect('chi',
                      'chi',
                      array(),
                      true, false);

        $this->expect('cos^2(x)',
                      'cos^2*(x)',
                      array(),
                      true, false);

        $this->expect('delta',
                      'delta',
                      array(),
                      true, false);

        $this->expect('e',
                      'e',
                      array(),
                      true, false);

        $this->expect('e*2',
                      'e*2',
                      array(),
                      true, false);

        $this->expect('e^x',
                      'e^x',
                      array(),
                      true, false);

        $this->expect('epsilon',
                      'epsilon',
                      array(),
                      true, false);

        $this->expect('eta',
                      'eta',
                      array(),
                      true, false);

        $this->expect('false',
                      'false',
                      array(),
                      true, false);

        $this->expect('gamma',
                      'gamma',
                      array(),
                      true, false);

        $this->expect('i',
                      'i',
                      array(),
                      true, false);

        $this->expect('i*2',
                      'i*2',
                      array(),
                      true, false);

        $this->expect('inf',
                      'inf',
                      array(),
                      true, false);

        $this->expect('iota',
                      'iota',
                      array(),
                      true, false);

        $this->expect('j',
                      'j',
                      array(),
                      true, false);

        $this->expect('kappa',
                      'kappa',
                      array(),
                      true, false);

        $this->expect('lambda',
                      'lambda',
                      array(),
                      true, false);

        $this->expect('ln*x',
                      'ln*x',
                      array(),
                      true, false);

        $this->expect('mu',
                      'mu',
                      array(),
                      true, false);

        $this->expect('not x',
                      'not x',
                      array(),
                      true, false);

        $this->expect('nu',
                      'nu',
                      array(),
                      true, false);

        $this->expect('omega',
                      'omega',
                      array(),
                      true, false);

        $this->expect('omicron',
                      'omicron',
                      array(),
                      true, false);

        $this->expect('p=?*s',
                      'p=QMCHAR*s',
                      array(),
                      true, false);

        $this->expect('phi',
                      'phi',
                      array(),
                      true, false);

        $this->expect('pi',
                      'pi',
                      array(),
                      true, false);

        $this->expect('pi*2',
                      'pi*2',
                      array(),
                      true, false);

        $this->expect('psi',
                      'psi',
                      array(),
                      true, false);

        $this->expect('rho',
                      'rho',
                      array(),
                      true, false);

        $this->expect('rho*z*V/(4*pi*epsilon[0]*(R^2+z^2)^(3/2))',
                      'rho*z*V/(4*pi*epsilon[0]*(R^2+z^2)^(3/2))',
                      array(),
                      true, false);

        $this->expect('sigma',
                      'sigma',
                      array(),
                      true, false);

        $this->expect('sin',
                      'sin',
                      array(),
                      true, false);

        $this->expect('sin x',
                      'sin*x',
                      array(),
                      true, false);

        $this->expect('sin*2*x',
                      'sin*2*x',
                      array(),
                      true, false);

        $this->expect('sin[2*x]',
                      'sin[2*x]',
                      array(),
                      true, false);

        $this->expect('sin^-1(x)',
                      'sin^-1*(x)',
                      array(),
                      true, false);

        $this->expect('tau',
                      'tau',
                      array(),
                      true, false);

        $this->expect('theta',
                      'theta',
                      array(),
                      true, false);

        $this->expect('true',
                      'true',
                      array(),
                      true, false);

        $this->expect('upsilon',
                      'upsilon',
                      array(),
                      true, false);

        $this->expect('x',
                      'x',
                      array(),
                      true, false);

        $this->expect('x * y',
                      'x*y',
                      array(),
                      true, false);

        $this->expect('x + 1',
                      'x+1',
                      array(),
                      true, false);

        $this->expect('x + y',
                      'x+y',
                      array(),
                      true, false);

        $this->expect('x - y',
                      'x-y',
                      array(),
                      true, false);

        $this->expect('x / y',
                      'x/y',
                      array(),
                      true, false);

        $this->expect('x < y',
                      'x<y',
                      array(),
                      true, false);

        $this->expect('x <= y',
                      'x<=y',
                      array(),
                      true, false);

        $this->expect('x = y',
                      'x=y',
                      array(),
                      true, false);

        $this->expect('x > y',
                      'x>y',
                      array(),
                      true, false);

        $this->expect('x >= y',
                      'x>=y',
                      array(),
                      true, false);

        $this->expect('x ^ y',
                      'x^y',
                      array(),
                      true, false);

        $this->expect('x and',
                      'x*and',
                      array(),
                      true, false);

        $this->expect('x and y',
                      'x and y',
                      array(),
                      true, false);

        $this->expect('x divides y',
                      'x*divides*y',
                      array(),
                      true, false);

        $this->expect('x or y',
                      'x or y',
                      array(),
                      true, false);

        $this->expect('x xor y',
                      'x*xor*y',
                      array(),
                      true, false);

        $this->expect('x y',
                      'x*y',
                      array(),
                      true, false);

        $this->expect('x!',
                      'x!',
                      array(),
                      true, false);

        $this->expect('x*(-y)',
                      'x*(-y)',
                      array(),
                      true, false);

        $this->expect('x*(y*z)',
                      'x*(y*z)',
                      array(),
                      true, false);

        $this->expect('x*2^y',
                      'x*2^y',
                      array(),
                      true, false);

        $this->expect('x*divides*y',
                      'x*divides*y',
                      array(),
                      true, false);

        $this->expect('x*i^3',
                      'x*i^3',
                      array(),
                      true, false);

        $this->expect('x*y*z',
                      'x*y*z',
                      array(),
                      true, false);

        $this->expect('x*y^z',
                      'x*y^z',
                      array(),
                      true, false);

        $this->expect('x+ 1',
                      'x+1',
                      array(),
                      true, false);

        $this->expect('x+(y+z)',
                      'x+(y+z)',
                      array(),
                      true, false);

        $this->expect('x+(y^z)',
                      'x+(y^z)',
                      array(),
                      true, false);

        $this->expect('x+1',
                      'x+1',
                      array(),
                      true, false);

        $this->expect('x+y+z',
                      'x+y+z',
                      array(),
                      true, false);

        $this->expect('x-(y+z)',
                      'x-(y+z)',
                      array(),
                      true, false);

        $this->expect('x/(y/z)',
                      'x/(y/z)',
                      array(),
                      true, false);

        $this->expect('x/y/z',
                      'x/y/z',
                      array(),
                      true, false);

        $this->expect('x1',
                      'x1',
                      array(),
                      true, false);

        $this->expect('x<1 and x>1',
                      'x<1 and x>1',
                      array(),
                      true, false);

        $this->expect('x=1 or 2',
                      'x=1 or 2',
                      array(),
                      true, false);

        $this->expect('x=1 or 2 or 3',
                      'x=1 or 2 or 3',
                      array(),
                      true, false);

        $this->expect('x=1 or x=2',
                      'x=1 or x=2',
                      array(),
                      true, false);

        $this->expect('x^(-(y+z))',
                      'x^(-(y+z))',
                      array(),
                      true, false);

        $this->expect('x^(-y)',
                      'x^(-y)',
                      array(),
                      true, false);

        $this->expect('x^(y+z)',
                      'x^(y+z)',
                      array(),
                      true, false);

        $this->expect('x^(y/z)',
                      'x^(y/z)',
                      array(),
                      true, false);

        $this->expect('x^-1',
                      'x^-1',
                      array(),
                      true, false);

        $this->expect('x^-y',
                      'x^-y',
                      array(),
                      true, false);

        $this->expect('x^7/7-2*x^6/3-4*x^3/3',
                      'x^7/7-2*x^6/3-4*x^3/3',
                      array(),
                      true, false);

        $this->expect('x^y',
                      'x^y',
                      array(),
                      true, false);

        $this->expect('x^y^z',
                      'x^y^z',
                      array(),
                      true, false);

        $this->expect('x_1',
                      'x_1',
                      array(),
                      true, false);

        $this->expect('x_y',
                      'x_y',
                      array(),
                      true, false);

        $this->expect('xy_zw',
                      'xy_zw',
                      array(),
                      true, false);

        $this->expect('xy_12',
                      'xy_12',
                      array(),
                      true, false);

        $this->expect('xi',
                      'xi',
                      array(),
                      true, false);

        $this->expect('xy',
                      'xy',
                      array(),
                      true, false);

        $this->expect('y^2-2*y-0.5',
                      'y^2-2*y-0.5',
                      array(),
                      true, false);

        $this->expect('y^2-2*y-8',
                      'y^2-2*y-8',
                      array(),
                      true, false);

        $this->expect('y^3-2*y^2-8*y',
                      'y^3-2*y^2-8*y',
                      array(),
                      true, false);

        $this->expect('y^z * x',
                      'y^z*x',
                      array(),
                      true, false);

        $this->expect('zeta',
                      'zeta',
                      array(),
                      true, false);

        $this->expect('{1,2,3.4}',
                      '{1,2,3.4}',
                      array(),
                      true, false);

        $this->expect('{1}',
                      '{1}',
                      array(),
                      true, false);

        $this->expect('{x, y, z }',
                      '{x,y,z}',
                      array(),
                      true, false);

        $this->expect('{}',
                      '{}',
                      array(),
                      true, false);

    }
}
