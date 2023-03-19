<?php
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
function check_num($n1)
{
  if (gettype($n1) === "integer" && ($n1 % 2 !== 0)) {
    return $n1;
  }
}

echo '<pre>';
print_r(array_filter($mix, "check_num"));
echo '</pre>';
// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )