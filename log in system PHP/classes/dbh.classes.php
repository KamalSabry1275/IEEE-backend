<?php
class dbh {
    protected function connect(){
        try {
            $username = "postgres";
            $password = "";
            $host = "localhost";
            $port = "5432";
            $dbName = "project3";
            $dbh = new PDO("pgsql:host=". $host .";port=".$port.";dbname=".$dbName.";",$username,$password);
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: ".$e->getMessage()."<br/>";
            die(); 
        }
    }
}