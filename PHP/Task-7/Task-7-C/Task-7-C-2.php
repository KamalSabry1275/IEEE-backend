<?php
function get_arguments1(...$all){
    $s = "";
    foreach ($all as $value) {
       $s .= ($value." "); 
    }
    return $s;
}

function get_arguments2(){
    $s = "";
    foreach (func_get_args() as $value) {
       $s .= ($value." "); 
    }
    return $s;
}

echo get_arguments1("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo "<br>";
echo get_arguments2("I", "Love", "PHP"); // I Love PHP 
?>