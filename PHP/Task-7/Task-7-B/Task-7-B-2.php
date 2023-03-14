<?php
$index = 0;

for ($i=$index+2; $i <= 20; $i+=2) { 
    echo $i."<br>";
}

$num = $index;
while($num < 20 ){
    $num += 2;
    echo $num."<br>";
}

$num = $index;
do {
    $num += 2;
    echo $num."<br>";
} while ($num < 20);

?>