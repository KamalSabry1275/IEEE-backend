<?php
// Write Function Content Here
$message = "Hello";

$Hello=function($name) use ($message) {
    return $message . $name;
};

echo $Hello("Osama"); // Hello Osama
?>