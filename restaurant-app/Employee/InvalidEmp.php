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
      <a href="../LoginHome.html">Login</a>
   </nav>

</section>

<div class="login">
    <h1>
        Employee Login
    </h1>
    <form action="EmpLogin.php" method="post">
        <br>
        <label for="emp_username">Username:
        <input type="text" id="emp_username" name="emp_username" required>
        </label>
        <br>
        <label for="emp_password">Password:
        <input type="password" id="emp_password" name="emp_password" required>
        </label>
        <button type="submit">Login</button>
    </form>
    <br>
    <h3 style="color:brown;">
        Invalid username or password. Please try again.
    </h3>

</div>
</body> 
</html>