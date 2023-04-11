<?php
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;
echo substr_count($str, strtolower($o), strripos($str, $o)) . "<br>";
echo substr_count($str, $e);