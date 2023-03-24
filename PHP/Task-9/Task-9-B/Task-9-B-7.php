<?php
// elzero.txt Content
// Hello Osamaa Web
// School
$hundle = fopen("elzero.txt" ,"r+");
fseek($hundle,6,SEEK_SET);
fwrite($hundle,"Elzero");
rewind($hundle);
echo fgets($hundle);
// elzero.txt New Content
// Hello Elzero Web
// School
?>