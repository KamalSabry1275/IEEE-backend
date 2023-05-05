<?php

class signup extends dbh{

    protected function setUser($username,$password,$email){
        $stmt = $this->connect()->prepare('INSERT INTO users (username,password,email) VALUES(? ,? ,? );');
        $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
        if(!$stmt->execute(array($username,$hashedPassword,$email))){
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkuser($username,$email){
        $stmt = $this->connect()->prepare('SELECT "username" FROM users WHERE username = ? OR email = ?;');
        if(!$stmt->execute(array($username,$email))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $resultCheck = true;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        return $resultCheck ;
    }
}