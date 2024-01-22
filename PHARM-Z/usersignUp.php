<?php

require "connection.php";

$fname = $_POST["fn"];
$password = $_POST["pwd"];
$email = $_POST["email"];



 Database::iud("INSERT INTO `users` (`email`,`username`,`password`) 
 VALUES ('".$email."','".$fname."','".$password."')");

 echo "1";


?>