<?php
$num = 2;
while ($num < 520) {
    if($num === 2){
        echo "1<br>";
        $num *= 2;
        echo $num ."<br>";
        continue;
    }
    $num *= 2;
    $num += 2;
    if($num > 520) break;
    echo $num ."<br>";
}
?>