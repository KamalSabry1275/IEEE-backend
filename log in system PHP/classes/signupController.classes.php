<?php

class signupController extends signup{
    private $username;
    private $password;
    private $confirm_password;
    private $email;

    public function __construct($username,$password,$confirm_password,$email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->confirm_password = $confirm_password;
        $this->email = $email;
    }

    public function sugnupUser(){
        if($this->emptyInput() == false){
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        if($this->invaidUsername() == false){
            header("location: ../signup.php?error=username");
            exit();
        }
        if($this->invaidEmail() == false){
            header("location: ../signup.php?error=email");
            exit();
        }
        if($this->passwprdMatch() == false){
            header("location: ../signup.php?error=passwordmatch");
            exit();
        }
        if($this->usernameTakeCheck() == false){
            header("location: ../signup.php?error=username or email taken");
            exit();
        }
        $this->setUser($this->username,$this->password,$this->email);
    }

    private function emptyInput(){
        $result = true;
        if(empty($this->username) || empty($this->password) || empty($this->confirm_password) || empty($this->email)){
            $result = false;
        }
        return $result;
    }

    private function invaidUsername(){
        $result = true;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->password)){
            $result = false;
        }
        return $result;
    }

    private function invaidEmail(){
        $result = true;
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        return $result;
    }

    private function passwprdMatch(){
        $result = true;
        if($this->password !== $this->confirm_password){
            $result = false;
        }
        return $result;
    }

    private function usernameTakeCheck(){
        $result = true;
        if(!$this->checkuser($this->username,$this->email)){
            $result = false;
        }
        return $result;
    }
}