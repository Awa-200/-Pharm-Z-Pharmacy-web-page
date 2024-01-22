<?php

require "connection.php";

$uname = $_POST["un"];
$pass = $_POST["pw"];
$email = $_POST["em"];


// $rs = Database::search("SELECT * FROM `sellers`");
// $num = $rs->num_rows;

// if($num > 0){

//     for($x = 0; $x < $num; $x++){

//         $data = $rs->fetch_assoc();
//     }
    
//     echo ($data["email"]);

// }else{

// }

 Database::iud("INSERT INTO `sellers` (`email`,`username`,`password`) 
 VALUES ('".$email."','".$uname."','".$pass."')");

 echo "1";


?>