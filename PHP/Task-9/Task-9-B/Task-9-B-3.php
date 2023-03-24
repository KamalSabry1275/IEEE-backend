<?php
if(!file_exists("Programming\PHP")) mkdir("Programming\PHP",0711,true);
else{
    if(is_dir("Programming\PHP")){
        rmdir("Programming\PHP");
        echo "Directory Programming/PHP Removed<br>";
    } 
    if(is_dir("Programming")){
        rmdir("Programming");
        echo "Directory Programming Removed<br>";
    } 
}
?>