<?php
$start = 0;
$countNum  = 0;
$countChar = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
foreach ($mix as $value) {
    if (gettype($value) == "integer") {
        echo $value."<br>";
        $countNum ++;
    }else{
        $countChar ++;
    }
}
echo "$countNum Numbers Printed<br>";
echo "$countChar Letters Ignored<br>";
?>