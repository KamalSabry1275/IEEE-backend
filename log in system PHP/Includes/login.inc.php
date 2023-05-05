<?php

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/loginController.classes.php";
    $login = new loginController($username,$password);

    $login->loginUser();

    header("location: ../home.php?error=none");

}