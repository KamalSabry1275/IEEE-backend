<?php
$start = 10;
$end = 0;
$stop = 3;
for ($i=$start; $i >= $stop; $i--) { 
    if($i < $start) echo $end.$i."<br>";
    else echo $i."<br>";
}
?>