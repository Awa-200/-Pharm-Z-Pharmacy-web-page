<?php session_start();

if(isset($_POST["btnSubmit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $contactNum = $_POST["phone"];
    $address = $_POST["address"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $con = mysqli_connect("localhost","root","","janindu_db","3306");

    if(!$con){
        die("Sorry we are facing a technical issue");
    }

    $sql = "INSERT INTO `users`(`fname`, `email`, `phone`, `address`, `username`, `password`) VALUES ('".$name."','".$email."','".$contactNum."','".$address."','".$username."','".$password."');";

    $result = mysqli_query($con,$sql);

    header('Location : account.html');
}
?>