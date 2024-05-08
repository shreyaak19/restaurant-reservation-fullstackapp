<?php

require_once('Connect.php');

?> 

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sizzle & Spice Bistro</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <link rel="stylesheet" href="style.css">

</head>
<body>

<section class="header">

   <div class="flex">
      <div class="img-logo">
         <img src="images/ResLogo.png" alt="Restaurant Logo">
         
      </div>
      <a class="logo">Sizzle & Spice Bistro</a>
   </div>

   <nav class="navbar">
      <a href="index.php">Home</a>
      <a href="Menu.php">Menu</a>
      <?php
        if ($_SESSION['logged_in'] == 'none') {
         echo '<a href="LoginHome.php">Login/Create Account</a>';
        }
        else if ($_SESSION['logged_in'] == 'cust') {
            echo '<a href="./Customer/CustHome.php">Make a Reservation</a>';
            echo '<a href="LogOut.php">Log Out</a>';
        }
        else if ($_SESSION['logged_in'] == 'admin') {
         echo '<a href="./Admin/AdminHome.php">Admin Home</a>';
         echo '<a href="LogOut.php">Log Out</a>';
        }
        else { 
         echo '<a href="./Employee/EmpHome.php">Employee Home</a>';
         echo '<a href="LogOut.php">Log Out</a>';
        }
      ?>
   </nav>

</section>

<section class="about" id="about">

<section class="home" id="home">

   <div class="row">
      <div class="content">
         <h3>Want to dine in?</h3>
            <p>Create an account to become a customer and make a reservation!</p>
      </div>
      <div class="image">
         <img src="images/cover-photo.webp" alt="">
      </div>
    </div>

</section>

<section class="services">

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.webp" alt="">
         <h3>food & drinks</h3>
         <p>View our menu for a detailed look at our offerings</p>
      </div>

      <div class="box">
         <img src="images/icon-2.webp" alt="">
         <h3>indoor and outdoor dining</h3>
         <p>Have your pick of indoor/outdoor seating at our Bistro</p>
      </div>

      <div class="box">
         <img src="images/icon-3.webp" alt="">
         <h3>aesthetics</h3>
         <p>Come dine in and enjoy our ambiance</p>
      </div>

   </div>

</section>

<div class="row">

      <div class="image">
         <img src="images/best-food.png" alt="">
      </div>
      <div class="content">
         <h3>About Us</h3>
         <p>We are an up and coming restaurant located in downtown Washington, D.C., catering to all your savory needs! 
            <br>We offer a wide variety of dishes, comprising of different cuisines such as classic American, Italian, and Mexican.
            <br>Whether you're here for a casual meal or a special occasion, 
            our grand aesthetic and warm staff is sure to bring comfort and <br> joy, ensuring that you'll have an exceptionary dining experience.
            We are excited to introduce a new set of fusion <br>entree items to our menu, such as Enchilada Pasta Bake, Tex-Mex Lasagna, and more.
        </p>
      </div>
   </div>

   <div class="row revers">
      <div class="image">
         <img src="images/res-photo.png" alt="">
      </div>
      <div class="content">
         <h3>Find us at</h3>
         <p>123 Res Street
            <br>Washington, D.C. 20001
            <br>United States
        </p>
      </div>
   </div>

  

   <div class="row">
      <div class="image">
         <img src="images/customer-service.png" alt="">
      </div>
      <div class="content">
         <h3>Contact Information</h3>
         <p>Restaurant Phone Number: (703)-123-4567</p>
         <p>Send inquiries to: sizzlespicebistro@gmail.com</p>
      </div>
   </div>

</section>



</body>
</html>