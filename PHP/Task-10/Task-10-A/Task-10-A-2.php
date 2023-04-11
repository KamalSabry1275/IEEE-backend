<?php
date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get()."<br>";
$date = "2005-10-02";
$d = date_create($date);
date_add($d, date_interval_create_from_date_string("15 hours 15 mins 15 seconds"));
echo date_format($d ,"Y, F, l 'dS' H:i:s");
?>