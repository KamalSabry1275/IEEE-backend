<?php
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];
echo '<pre>';
print_r(array_combine($codes, $means));
echo '</pre>';
// Output
// Array
// (
//   [h] => HTML
//   [c] => CSS
//   [j] => JavaScript
// )