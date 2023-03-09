<?php
$a = @$b or die("variable is not here");

$f = @file("Not_A_File") or die("sorry error");

@include("Not_A_File") or die("error");
?>