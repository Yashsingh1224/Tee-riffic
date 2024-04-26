<?php
session_start();
include("connections.php");
include("functions.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Syndicate</title></title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5049d8372c.js" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body bgcolor="black">
    <section id= "header">
        <h1>Tee-riffic</h1>
        
        <div>
            <ul id = "bar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="support.html">Support</a></li>
                <li><a href="contact.html">Contact us</a></li>
                <li><a href="cart.html" id="lg-bag"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark fa-fade"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            <i id="bar1" class="fa-solid fa-bars"></i>
        </div>
    </section>
    <section id = "banner">
        <h1>The Collective Canvas</h1>
        <div class="container">
            <img src="img/banner-index.jpeg" width="100%" alt="">
    </section>

    <section id="feature" class="p1">
        <h2 style = font-size:40px>Featured products</h2>
         <p style= font-size:25px>Summer collection New modern Designs</p>
         <div class="pro-container">
         <div class="pro">
            <img src="img/product/p1.jpg" alt="">
            <div class="des">
                <span>Hot</span>
                <h3>Angel T-shirt</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h2>Rs 799</h2>
            </div>
         </div>
         <div class="pro">
            <img src="img/product/p2.jpg" alt="">
            <div class="des">
                <span>Hot</span>
                <h3>Angel T-shirt</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h2>Rs 799</h2>
            </div>
  
         </div>
         <div class="pro">
            <img src="img/product/p3.jpg" alt="">
            <div class="des">
                <span>Hot</span>
                <h3>Angel T-shirt</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h2>Rs 799</h2>
            </div>
         </div>
         <div class="pro">
            <img src="img/product/p4.jpg" alt="">
            <div class="des">
                <span>Hot</span>
                <h3>Angel T-shirt</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h2>Rs 799</h2>
            </div>
         </div>
         </div>
    </section>

    <section id = "banner2" class = "section1">
        <h1 style =font-size:50px><span class="a1">Upto </span><span>70%</span> OFF-All T-shirts</h1>
    </section>

        <script src="script.js"></script>


</body>
</html>