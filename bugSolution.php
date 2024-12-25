The solution is to always use strict comparison (`===`) instead of loose comparison (`==`) when comparing values in PHP.

Here's the corrected code:
```php
$a = 0;
$b = 'abc';

if ($a === $b) {
  echo '$a is equal to $b';
} else {
  echo '$a is not equal to $b';
}
```
Using strict comparison (`===`), the condition `$a === $b` will now correctly evaluate to `false` because the types are different (integer vs string), preventing the unexpected behavior observed with loose comparison.