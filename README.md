# PHP Loose Comparison Pitfall

This repository demonstrates a common but subtle error in PHP related to loose comparison using the `==` operator.  Loose comparison can lead to unexpected results due to PHP's type juggling behavior.  This example highlights the issue and provides a solution using strict comparison (`===`).

## The Problem

PHP's loose comparison (`==`) does not always behave as expected, especially when dealing with different data types.  It attempts to convert the operands to a common type before comparison, often leading to illogical outcomes.

The `bug.php` file contains code that illustrates this problem.

## The Solution

To avoid this type of error, always use strict comparison (`===`) when comparing values.  Strict comparison checks for both value and type equality.  The `bugSolution.php` file shows the corrected code using strict comparison.

This example demonstrates how easy it is to make mistakes in PHP if you are not careful about type handling, even when working with seemingly simple comparisons.