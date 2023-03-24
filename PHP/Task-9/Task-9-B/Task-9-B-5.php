<?php
echo basename(__FILE__)."<br>";
echo pathinfo(__FILE__,PATHINFO_BASENAME)."<br>";
echo pathinfo(__FILE__)["basename"]."<br>";
echo basename(realpath(__FILE__))."<br>";
?>