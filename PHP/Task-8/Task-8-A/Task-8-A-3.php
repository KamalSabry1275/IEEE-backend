<?php
$str = 'aAa';
$num = 3;
$char = "_";
$str[$num] = $char;
// Write Your Code Here
echo str_repeat(strtolower(substr_replace($str, $char, strlen($str), 0)), $num);