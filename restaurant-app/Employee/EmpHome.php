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

</head>
<body>

<section class="header">

   <div class="flex">
      <div class="img-logo">
         <img src="../images/ResLogo.png" alt="Restaurant Logo">
         
      </div>
      <a class="logo">Sizzle & Spice Bistro | Welcome, 
        <?php 
                if (isset($_SESSION['emp_name'])) {
                    echo $_SESSION['emp_name'];
                } else {
                    echo "Employee";
                }
        ?>
      </a>
   </div>

   <nav class="navbar">
      <a href="../index.php">Home</a>
      <a href="../Menu.php">Menu</a>
      <a href="EmpInfo.php">Account Info</a>
      <a href="../LogOut.php">Log Out</a>
   </nav>

</section>

<div class="login-home-block">
    <a href="EmpShift.php" class="login-button">Log in Shift</a>
    <a href="EmpRes.php" class="login-button">View Reservations</a>
</div>

</section>

</body>
</html>