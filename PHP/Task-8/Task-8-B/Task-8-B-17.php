<?php
$nums = [1, 2, 3, 4, 5, 6];
$result = array();
$rand_nums = array();
$rand_num = 0;
for ($i = 0; $i < count($nums); $i++) {
  $rand_num = rand(0, count($nums) - 1);
  while (in_array($rand_num, $rand_nums)) {
    $rand_num = rand(0, count($nums) - 1);
  }
  $rand_nums[] = $rand_num;
  $result[] = $nums[$rand_nums[$i]];
}
echo '<pre>';
print_r($result);
echo '</pre>';

// Output
// Every Time The Array Elements Will Be Shuffled

// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// // Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )