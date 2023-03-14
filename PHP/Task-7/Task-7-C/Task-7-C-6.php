<?php
// Write Function Content Here
function calculate($num1,$num2,$operation="add"){
    if($operation=="a" || $operation =="add"){
        return $num1 +$num2;
    }
    elseif($operation=="s" || $operation =="subtract"){
        return $num1 - $num2;
    }
    elseif($operation=="m" || $operation =="multiply"){
        return $num1 *$num2;
    }else{
        return "None valid opertion";
    }
}
// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200
?>