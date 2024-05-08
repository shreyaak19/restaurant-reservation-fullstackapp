<?php

require_once('Connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sizzle & Spice Bistro: Login</title>

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
      <a href="LoginHome.php">Login/Create Account</a>
   </nav>

</section>

<div class="login-home-block">
    <a href="Customer/NewCust.php" class="login-button">Create an Account</a>
    <a href="Customer/CustLogin.php" class="login-button">Customer Login</a>
    <a href="Employee/EmpLogin.php" class="login-button">Employee Login</a>
    <a href="Admin/AdminLogin.php" class="login-button">Administrator Login</a>
</div>

