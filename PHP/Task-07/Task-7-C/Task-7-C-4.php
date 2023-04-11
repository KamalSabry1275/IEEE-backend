<?php
function multiply(...$nums){
    $sum = 1;
    foreach ($nums as $num) {
        if(gettype($num) == "integer"){
            $sum *= $num;
        }elseif(gettype($num) == "double"){
            $sum *= (int)$num;
        }
    }
    return $sum;
}

echo multiply(10, 20); // 200
echo "<br>";
echo multiply("A", 10, 30); // 300
echo "<br>";
echo multiply(100.5, 10, "B"); // 1000
?>