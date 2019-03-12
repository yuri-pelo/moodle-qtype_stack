# Development track for STACK

Requests for features and ideas for developing STACK are all recorded in [Future plans](Future_plans.md). The
past development history is documented on [Development history](Development_history.md).

How to report bugs and make suggestions is described on the [community](../About/Community.md) page.

## Version 4.3

_STACK 4.3 requires at least Moodle 3.1.0_  Do not upgrade the plugin on an earlier version of Moodle!

Version 4.3 contains re-factored and enhanced code for dealing with Maxima, lisp and platform dependencies.  When upgrading to version 4.3 please expect changes to the settings page, and healthcheck.  You will need to review all setting carefully.

Note: newer versions of Maxima require that a variable has been initialised as a list/array before you can assign values to its indices.  For this reason some older questions may stop working when you upgrade to a new version of Maxima.  Please use the bulk test script after each upgrade!  See issue #343.
* Removed the maxima mathml code (which wasn't connected or used).
* Add in extra options in the input `allowempty` and `hideanswer`.
* 1st version of API.

* Add in a version number to STACK questions.
* Better install code (see #332).
* Better CSS, including "tool tips".  May need to refactor javascript.  (See issue #380)
* A STACK maxima function which returns the number of decimal places/significant figures in a variable (useful when providing feedback).  Needed for the refactoring.
* Enable individual questions to load Maxima libraries.  (See issue #305)
* Re-sizable matrix input.  See Aalto/NUMBAS examples here, with Javascript.
* Add support for matrices with floating point entries, and testing numerical accuracy.
* Update MCQ to accept units.
* Add a base N check to the numeric input.* Expand support for input validation options to matrices (e.g. floatnum, rationalize etc.)
* Add in full parser, to address issue #324.
