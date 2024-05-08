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

<body style="text-align:center;">

<section class="header">

   <div class="flex">
      <div class="img-logo">
         <img src="../images/ResLogo.png" alt="Restaurant Logo">
         
      </div>
      <a class="logo">Sizzle & Spice Bistro</a>
   </div>

   <nav class="navbar">
      <a href="../index.php">Home</a>
      <a href="../Menu.php">Menu</a>
      <a href="AdminHome.php">Admin Home</a>
      <a href="../LogOUt.php">Log Out</a>

   </nav>

</section>

<div class="login">
    <h1>
        Enter Admin Information
    </h1>
    <form action="AddAdminBack.php" method="post">
        <br>
        <label for="admin_name">Name:
        <input type="text" id="admin_name" name="admin_name" required>
        </label>
        <label for="admin_username">Username:
        <input type="text" id="admin_username" name="admin_username" required>
        </label>
        <label for="admin_password">Password:
        <input type="password" id="admin_password" name="admin_password" required>
        </label>
        <label for="admin_email">Email:
        <input type="email" id="admin_email" name="admin_email" required>
        </label>
        <label for="admin_phone">Phone:
        <input type="tel" id="admin_phone" name="admin_phone" maxlength="10" min="0" max="9999999999" required>
        </label>
        <button type="submit">Add Admin</button>
    </form>
    <?php 
    if (isset($_SESSION['added']) && $_SESSION['added'] == true) {
        echo '<br> <h3 style="color:brown;">
        New admin added successfully</h3>';
        $_SESSION['added'] = false;
    }
    ?>

</div>
</body>
</html>