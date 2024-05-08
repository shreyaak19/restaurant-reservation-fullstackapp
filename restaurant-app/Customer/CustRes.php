<?php

require_once('../Connect.php');

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

   <link rel="stylesheet" href="../style.css">
<style>
</style>
</head>
<body style="text-align:center;">

<section class="header">

   <div class="flex">
      <div class="img-logo">
         <img src="../images/ResLogo.png" alt="Restaurant Logo">
         
      </div>
      <a class="logo">Sizzle & Spice Bistro | Welcome,
      <?php 
        echo $_SESSION['cust_name'];?>
      </a>
   </div>

   <nav class="navbar">
      <a href="index.php">Home</a>
      <a href="Menu.php">Menu</a>
      <a href="CustHome.php">My Home</a>
      <a href="../LogOut.php">Log Out</a>
   </nav>

</section>

    <div class="login">
           <h2>Reservation Successful</h2><br>
           <div>Name: <?php 
            echo $_GET['name'];
           ?></div><br>
           <div>Email: <?php echo $_GET['email'];?> </div><br>
           <div>Phone: <?php echo $_GET['phone'];?> </div><br>
           <div>Number of Guests: <?php echo $_GET['num_guest'];?> </div><br>
           <div>Date: <?php echo $_GET['date'];?> </div><br>
           <div>Time: <?php echo date("g:i a", strtotime($_GET['phone'])); ?> </div><br>
           <div> 
            <?php
            if ($_GET['comment'] == "") {
               echo '<br>No comments';
            }
            else {
            echo '<br>' . $_GET['comment'];
            }
            ?></div>
   </div>


<section class="services">

   <div class="box-container">

      <div class="box">
         <img src="../images/icon-1.webp" alt="">
         <h3>food & drinks</h3>
         <p>View our menu for a detailed look at our offerings</p>
      </div>

      <div class="box">
         <img src="../images/icon-2.webp" alt="">
         <h3>indoor and outdoor dining</h3>
         <p>Have your pick of indoor/outdoor seating at our Bistro</p>
      </div>

      <div class="box">
         <img src="../images/icon-3.webp" alt="">
         <h3>aesthetics</h3>
         <p>Come dine in and enjoy our ambiance</p>
      </div>

   </div>

</section>

</body>
</html>