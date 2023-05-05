<?php

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $confirm_password = $_POST["confirm-password"];

    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signupController.classes.php";
    $signup = new signupController($username,$password,$confirm_password,$email);

    $signup->sugnupUser();

    header("location: ../index.php?error=none");

}