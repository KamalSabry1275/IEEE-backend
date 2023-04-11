<?php
 $nums = [5, 10, 20, 5, 30, 40];
 $exclude = 5;
 $filtered_nums = array_filter($nums, function ($num) use ($exclude) {
   return $num !== $exclude;
 });
 $sum = array_sum($filtered_nums);
 echo $sum; 
 // Output
 // 100