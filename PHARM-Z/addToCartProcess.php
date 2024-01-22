<?php

require "connection.php";


if(isset($_GET["id"])){

    $pid = $_GET["id"];

    $cart_rs = Database::search("SELECT * FROM `cart` WHERE `product_id`='".$pid."'");
    $cart_num = $cart_rs->num_rows;

    $product_rs = Database::search("SELECT * FROM `produts` WHERE `id`='".$pid."'");
    $product_data = $product_rs->fetch_assoc();


    if($cart_num == 1){

        echo("Already Added to Cart");

    }else{

        Database::iud("INSERT INTO `cart`(`product_id`) VALUES ('$pid')");
        echo ("New Product added to the Cart");

    }

}else{
    echo ("Something Went Wrong");
}
