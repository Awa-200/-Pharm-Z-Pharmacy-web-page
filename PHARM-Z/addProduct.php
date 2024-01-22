<?php

$hostname = "localhost"; 
$username = "root";
$password = "";
$databaseName = "janindu_db"; 

$connect = mysqli_connect($hostname, $username, $password, $databaseName);


if (isset($_POST['submit'])) {

    if(!empty($_POST['product_name'])){

    $pid = $_POST["product_name"];
    $image = $_POST["image"];
    $imagePath = "../PHARM-Z/Images/medicine/".$image;
    $text1 = $_POST["text1"];
    $text2 = $_POST["text2"];
    $description = $_POST["description"];

         $query = "INSERT INTO `produts`(`product_name`, `image`, `text1`, `text2`, `description`) VALUES ('$pid','$imagePath','$text1','$text2','$description')";

        $run = mysqli_query($connect,$query);

        if($run){
            echo "your product added successfully";
        }else{
            echo "Sorry try again";
        }
    
    }else{
        echo("Enter Product Name");
    }

}
