<?php
date_default_timezone_set("Africa/Cairo");
$date = "1990-10-01";
$d1 = date_create($date);
$d2 = date_create("1970-1-1");
$time = date_diff($d1,$d2);
echo "From Epoch Time Till 1990-10-01 Is Approximately ".($time->days). " Days"."<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately ".($time->y). " Years";
?>