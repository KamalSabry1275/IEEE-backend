<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
for ($i=0; $i < 7; $i++) { 
    if($i*(int)$mix[$i] <> 0)
        echo $mix[$i]."<br>";
}
?>