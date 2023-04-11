<?php
$nums = [10, 20, 30];
echo array_reduce($nums, fn ($i, $c) => $i + $c);
echo "<br>";
echo array_sum($nums);
// Output
// 60
// 60