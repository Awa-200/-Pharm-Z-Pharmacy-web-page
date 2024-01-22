<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>PHARM-Z HOME</title>
      <link rel="stylesheet" href="../PHARM-Z/CSS/seller.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script src="https://kit.fontawesome.com/49eb6ca089.js" crossorigin="anonymous"></script>
      
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
            <li><a href="Index.html"> HOME </a></li>
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
<body>
<h1>ADD YOUR PRODUCT HERE!!!</h1> 
<div class="form">
<form action="addProduct.php" method="post">
    <h3>Product Name</h3>
    <input type="text" name="product_name">

    <h3>Image</h3>
    <input type="file" name="image">

    <h3>Brand</h3>
    <input type="text" name="text1">

    <h3>Price</h3>
    <input type="text" name="text2">

    <h3>Description</h3>
    <input type="text" name="description">

    <input type="submit" name="submit" value="Add Product">
</form>
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
         menuBtn.onclick = ()=>{
           items.classList.add("active");
           menuBtn.classList.add("hide");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
         cancelBtn.onclick = ()=>{
           items.classList.remove("active");
           menuBtn.classList.remove("hide");
           searchBtn.classList.remove("hide");
           cancelBtn.classList.remove("show");
           form.classList.remove("active");
           cancelBtn.style.color = "#ff3d00";
         }
         searchBtn.onclick = ()=>{
           form.classList.add("active");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
      </script>
      <script src="Js/script.js"></script>
   
</body>
</html>