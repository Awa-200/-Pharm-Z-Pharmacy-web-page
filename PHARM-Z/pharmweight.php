<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>PHARM-Z HOME</title>
    <link rel="stylesheet" href="../PHARM-Z/CSS/phw.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://kit.fontawesome.com/49eb6ca089.js" crossorigin="anonymous"></script>
    <script src="Js/js.js"></script>
</head>

<body>
    <nav>
        <div class="menu-icon">
            <span class="fas fa-bars"></span>
        </div>
        <div class="logo">
            <h1>PHARM-Z</h1>
        </div>
        <div class="nav-items">
            <li><a href="Index1.html"> HOME </a></li>
            <li><a href="pharmacy.html"> PHARMACY </a></li>
            <li><a href="OnlineDoc.html"> ONLINE DOCTOR </a></li>
            <li><a href="mycart.php"> MY CART </a></li>
            <li><a href="aboutus.html"> ABOUT US </a></li>
            <button><a href="account.html">ACCOUNT</a></button>
        </div>
        <div class="search-icon">
            <span class="fas fa-search"></span>
        </div>
        <div class="cancel-icon">
            <span class="fas fa-times"></span>
        </div>
        <form action="#">
            <input type="search" class="search-data" placeholder="Search" required>
            <button type="submit" class="fas fa-search"></button>
        </form>
    </nav>
    <!-- page body part -->
    <div class="avail">
        <p>
        <h1>Available products.</h1>
        </p>
    </div>

    <div class="product1">

        <?php

        require "connection.php";

        $product_rs = Database::search("SELECT * FROM `produts`");

        $product_num = $product_rs->num_rows;

        for ($z = 0; $z < $product_num; $z++) {
            $product_data = $product_rs->fetch_assoc();
        ?>
            <div class="pro">


                <img src="<?php echo $product_data["image"]; ?>" alt="">
                <div class="description">
                    <span><?php echo $product_data["product_name"]; ?></span>
                    <h5><?php echo $product_data["text1"]; ?></h5><br>
                    <div class="star">
                        <h2><?php echo $product_data["text2"]; ?></h2><br>
                        <a href="<?php echo $product_data["description"]; ?>" class="btn">More Details</a>
                    </div>

                    <button onclick='addToWatchlist(<?php echo $product_data["id"]; ?>);'><svg class="fcart" width="64px" height="64px" viewBox="-8.4 -8.4 40.80 40.80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.72"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1 1C0.447715 1 0 1.44772 0 2C0 2.55228 0.447715 3 1 3H3.20647L5.98522 14.9089C6.39883 16.6816 7.95486 17.9464 9.76471 17.9983V18H17.5874C19.5362 18 21.2014 16.5956 21.5301 14.6747L22.7857 7.33734C22.9947 6.11571 22.0537 5 20.8143 5H5.72686L4.97384 1.77277C4.86824 1.32018 4.46475 1 4 1H1ZM6.19353 7L7.9329 14.4545C8.14411 15.3596 8.95109 16 9.88058 16H17.5874C18.5618 16 19.3944 15.2978 19.5588 14.3373L20.8143 7H6.19353Z" fill="#088178"></path>
                                <path d="M8 23C9.10457 23 10 22.1046 10 21C10 19.8954 9.10457 19 8 19C6.89543 19 6 19.8954 6 21C6 22.1046 6.89543 23 8 23Z" fill="#088178"></path>
                                <path d="M19 23C20.1046 23 21 22.1046 21 21C21 19.8954 20.1046 19 19 19C17.8954 19 17 19.8954 17 21C17 22.1046 17.8954 23 19 23Z" fill="#088178"></path>
                            </g>
                        </svg></button>

                </div>

            
            </div>

            <?php
        }

            ?>

    </div>
    <footer class="section-p1">
        <div class="col">

            <h1>PHARM-Z</h1><br>
            <h4>Contact</h4>
            <p><strong>Address: PHARM-Z, Liberty plaza Kollupitiya colombo 3.</strong> </p>
            <p><strong>Phone: </strong>011 1234567 / 011 7654321</p>
            <p><strong>E-mail: </strong>pharmz@gmail.com</p>
        </div>
        <div class="col">
            <h4>About us</h4>
            <a href="#">About us</a>
            <a href="#">Delivary Information</a>
            <a href="#">Privacy policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Log in</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col">
            <h4>Install App</h4>
            <p>From App store or Google Play </p>
            <div class="row">
                <img src="" alt="">
                <img src="" alt="">
                <p>Secure payment gateway</p>
                <img src="./Images/card_img.png" alt="">
            </div>
        </div>
    </footer>



    <script>
        const menuBtn = document.querySelector(".menu-icon span");
        const searchBtn = document.querySelector(".search-icon");
        const cancelBtn = document.querySelector(".cancel-icon");
        const items = document.querySelector(".nav-items");
        const form = document.querySelector("form");
        menuBtn.onclick = () => {
            items.classList.add("active");
            menuBtn.classList.add("hide");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
        }
        cancelBtn.onclick = () => {
            items.classList.remove("active");
            menuBtn.classList.remove("hide");
            searchBtn.classList.remove("hide");
            cancelBtn.classList.remove("show");
            form.classList.remove("active");
            cancelBtn.style.color = "#ff3d00";
        }
        searchBtn.onclick = () => {
            form.classList.add("active");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
        }
    </script>

    <script src="./Js/script.js"></script>
</body>

</html>