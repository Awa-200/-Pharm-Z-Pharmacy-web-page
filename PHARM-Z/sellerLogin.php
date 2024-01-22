<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "janindu_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
 

include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['email']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: sellerAccount.html?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: sellerAccount.html?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM sellers WHERE `email`='$uname' AND `password`='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                header("Location: homeSeller.php");

                exit();

            }else{

                header("Location: sellerAccount.html?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: sellerAccount.html?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: sellerAccount.html");

    exit();

}