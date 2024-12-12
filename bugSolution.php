```php
function foo(int $x): int {
  if ($x < 0) {
    return -1; 
  }
  if ($x == 0){ //Explicitly handle the zero case
      return 1; // return value for zero.
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
echo $result; // Output: -1

$result = bar(5);
echo $result; // Output: 6

$result = bar(15);
echo $result; // Output: 10

$result = bar(0);
echo $result; // Output: 1 (No warning)
```