```php
function foo(int $x): int {
  if ($x < 0) {
    return -1; 
  }
  return $x + 1;
}

function bar(int $x): int {
  if ($x > 10) {
    return 10;
  }
  return foo($x);
}

$result = bar(-5);
echo $result; // Output: -1 (Correct)

$result = bar(5);
echo $result; // Output: 6 (Correct)

$result = bar(15);
echo $result; // Output: 10 (Correct)

$result = bar(0);  // This will cause a warning
echo $result; //Output: 1 but warning is shown
```