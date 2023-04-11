<?php
    $handle = fopen("elzero.txt", "r");
    echo fread($handle, 24)."<br>";
    
    rewind($handle);
    echo fgets($handle) . fgets($handle) . "<br>";

    fseek($handle, 0, SEEK_SET);
    echo fgets($handle) . fgets($handle) . "<br>";

    fclose($handle);
    foreach(array(file("elzero.txt")) as $value){
        echo $value[0]." ".$value[1]."<br>";
    }
// Needed Output
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"
?>