<?php
// With time() Function
echo time() . "<br>"; // 1681251720
$d1 = date_create();
$now = date_format($d1,"Y-m-d H:i:s");
echo strtotime($now,strtotime("1970-1-1")) . "<br>";
/////////////////////////////
$d2 = getdate();
echo $d2["0"]."<br>";
////////////////////////////
$dtime = new DateTime(date("Y-m-d H:i:s"));
echo $dtime->getTimestamp(); 
// Output Needed With Other Ways
// 1681251720
// 1681251720
// 1681251720
?>