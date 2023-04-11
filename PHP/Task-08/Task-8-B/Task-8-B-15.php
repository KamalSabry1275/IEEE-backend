<?php
$chars = ["o", "r", "e", "z", "l", "E"];
$len = 5;
$reversed = array();
for ($i = $len; $i >= 0; $i--) {
  $reversed[] = $chars[$i];
}
$output = "";
for ($j = 0; $j <= $len; $j++) {
  $output .= $reversed[$j];
}
echo $output;
// Output
// "Elzero"