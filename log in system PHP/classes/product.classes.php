<?php

class product extends dbh{

    protected function getProducts($username){
        $stmt = $this->connect()->prepare('SELECT "productname","price" FROM products WHERE "username" = ?;');

        if(!$stmt->execute(array($username))){
            $stmt = null;
            header("location: ../home.php?error=stmtfailed");
            exit();
        }
        
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
        return $products;
    } 


    protected function setProduct($productname,$price,$username){
        try{
            $stmt = $this->connect()->prepare('INSERT INTO "products" ("productname","price","username") VALUES(?,?,?);');
            if(!$stmt->execute(array($productname,$price,$username))){
                $stmt = null;
                header("location: ../home.php?error=stmtfailed");
                exit();
            }
            
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt = null;
            return $products;    
        }catch(PDOException $e){
            header("location: ../productAdd.php?error=available");
            exit();
        }
    } 

    protected function editProduct($price,$productname,$username){
        $stmt = $this->connect()->prepare("UPDATE Products SET price=:price  WHERE productname=:productname AND username=:username;");
        $stmt->execute(array(":price" => $price,":productname" => $productname,":username" => $username));
        // if (!$stmt->execute(array(":price" => '$price',":productname" => '$productname',":username" => '$username'))) {
        //     $stmt = null;
        //     header("location: ../home.php?error=stmtfailed");
        //     exit();
        // }
    } 

    protected function delete($productname,$username){
        $stmt = $this->connect()->prepare('DELETE FROM "products" WHERE productname = ? AND username = ?;');

        if(!$stmt->execute(array($productname,$username))){
            $stmt = null;
            header("location: ../home.php?error=stmtfailed");
            exit();
        }
    } 
}