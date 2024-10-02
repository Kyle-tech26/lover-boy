<?php 
session_start();
include("connect.php")
?>



<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE-Edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ARC TEA</title>
        <link rel="stylesheet" type="text/css" href="design.css ">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">"
    </head>
    <body>
        <header>
            <a href="#" class="logo"><img src="logo12.png" alt="logo12"></a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <div class="font"><a href="#">Enchanted Philippines Getaways</a></div>

            <ul class="navbar">
               <li><a href="#Home">HOME</a></li>
               <li><a href="#Story">STORY</a></li>
               <li><a href="#About">ABOUT</a></li>
               <li><a href="#Review">REVIEW</a></li>
                    </ul>
    
            </header>
            <section class="HOME" id="HOME">
                <div class="home-text">
                    <span>Welcome To</span>
                    <h1>ARC TEA</h1>
                    <h2>FREE MILKTEA IS A <br>TAP AWAY</h2>
                    <a href="#" class="btn">Join Now</a>
                </div>
                <div class="home-img">
                    <img src="001.png" alt="">
                </div>
            </section>
            <section class="shop" id="shop">
                <div class="heading">
                    <span> Shop Now </span>
                    <h1>SHOP ARC-TEA</h1>
                </div>
                <div class="shop-container">
                    <div class="box">
                        <div class="box-img">
                            <img src="shop1.png" alt="">
                        </div>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <h2>ARC Matcha</h2>
                        <span>$ 11.99</span>
                        <a href="#" class="btn">Order Now</a>
                    </div>

                    <div class="box">
                        <div class="box-img">
                            <img src="shop2.png" alt="">
                        </div>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <h2>ARC Coconut</h2>
                        <span>$ 11.30</span>
                        <a href="#" class="btn">Order Now</a>
                    </div>

                    <div class="box">
                        <div class="box-img">
                            <img src="shop3.png" alt="">
                        </div>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half' ></i>
                        </div>
                        <h2>ARC Chocolate</h2>
                        <span>$ 12.30</span>
                        <a href="#" class="btn">Order Now</a>
                    </div>
                </div>
            </section>
           <!--delivery-->
           <section class="delivery">
            <div class="heading">
                <span>Get Now</span>
                <h1>Order With Grab Panda</h1>
            </div>
           </section>
       
        </header>
       
       
       
        <script src="main.js"></script>
       
    </body>
</html>
