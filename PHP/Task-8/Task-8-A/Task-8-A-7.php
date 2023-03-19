<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$output = "";

foreach ($chars as $char) {
    if (ctype_alpha($char)) { // check if $char is a letter
        $output .= $char;
    }
}

echo ucfirst(strtolower($output)); 