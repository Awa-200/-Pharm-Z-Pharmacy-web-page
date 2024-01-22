<?php

class Database{

    public static $connection;

    public static function setUpConnection(){

        if(!isset(Database::$connection)){

            $sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "janindu_db";

Database::$connection = mysqli_connect($sname, $unmae, $password, $db_name);

if (!Database::$connection) {

    echo "Connection failed!";

}
 
           // Database::$connection = new mysqli("localhost","root","","janindu_db");
        }
    }

    public static function iud($q){
        Database::setUpConnection();
        Database::$connection->query($q);
    }

    public static function search($q){
        Database::setUpConnection();
        $resultset = Database::$connection->query($q);
        return $resultset;
    }

}
