<?php

require_once('Connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sizzle & Spice Bistro: Menu</title>

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
       <h3>Our Menu</h3>
       <section class="menu-items">
        <h2>Appetizers</h2>
            <p>Loaded Potato Skins - $10.99
            <br>
            Buffalo Wings - $8.99</p>
                <br>
        <h2>Entrees</h2>
            <p>Classic Cheeseburger - $15.99
            <br>BBQ Ribs - $18.99
            <br>Grilled Salmon - $21.99
            </p>
            <br>
        <h2>Sides</h2>
            <p>Garlic Knots - $5.99
            <br>Sweet Potato Fries - $4.99
            </p>
            <br>
        <h2>Desserts</h2>
            <p>Apple Pie - $7.99
            <br>New York Style Cheesecake - $9.99
            </p>
            <br>
        <h2>Beverages</h2>
            <p>Iced Tea - $2.99
            <br>Root Beer Float - $3.99
            </p>
            <br>
        <h2>Kids Menu</h2>
            <p>Mac & Cheese - $7.99
            <br>Grilled Cheese Sandwich - $6.99
            </p>
        </section>
    </div>
</div>
</section>
</section>