<?php
date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get()."<br>";
$d = date_create();
echo date_format($d,"D, d M y - h:i:s A")."<br>";
echo date_format($d,"l, d F Y - h:i:s A")."<br>";
?>