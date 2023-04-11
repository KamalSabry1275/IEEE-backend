<?php
$name = "Osama";
$age = 40;
$country = "Egypt";

echo ($age > 18)?(gettype($name)?($country === "Egypt"?"The Age Is Good To Go<br>The Name Is Good To Go<br>The Country Is Good To Go<br>":""):""):"";
?>