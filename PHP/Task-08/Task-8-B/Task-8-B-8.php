<?php
$chars = ["A", "B", "C"];
$chars[] = "D";
array_push($chars, "D");
$chars = array_pad($chars, 5, "D");
$chars = array_merge($chars, ["D"]);
array_splice($chars, 5, 0, "D");
echo '<pre>';
print_r($chars);
echo '</pre>';
// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )