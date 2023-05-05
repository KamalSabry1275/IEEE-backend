<?php

class login extends dbh{

    public function getUser($username,$password){
        $stmt = $this->connect()->prepare('SELECT "password" FROM users WHERE "username" = ?;');

        if(!$stmt->execute(array($username))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
    
        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }
        
        $passwordHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password,$passwordHashed[0]["password"]);

        if($checkPassword == false){
            $stmt = null;
            header("location: ../index.php?error=worngpassword");
            exit();
        }else if($checkPassword == true){
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE "username" = ? AND "password" = ?;');
            if(!$stmt->execute(array($username,$passwordHashed[0]["password"]))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);         
            setcookie("data[username]",$user[0]["username"],false,"/");
            setcookie("data[password]",$user[0]["password"],false,"/");
        }

        $stmt = null;
    }
    
}