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
        Enter Employee Information
    </h1>
    <form action="AddEmpBack.php" method="post">
        <br>
        <label for="emp_name">Name:
        <input type="text" id="emp_name" name="emp_name" required>
        </label>
        <label for="emp_username">Username:
        <input type="text" id="emp_username" name="emp_username" required>
        </label>
        <label for="emp_password">Password:
        <input type="password" id="emp_password" name="emp_password" required>
        </label>
        <label for="emp_email">Email:
        <input type="text" id="emp_email" name="emp_email" required>
        </label>
        <label for="emp_phone">Phone:
        <input type="tel" id="emp_phone" name="emp_phone" maxlength="10" min="0" max="9999999999" required>
        </label>
        <label for="emp_type">Employee Type:
            <select name="emp_type" id="emp_type">
        <option value="Full-Time">Full-Time</option>
        <option value="Part-Time">Part-Time</option>
        </select>
        </label>
        <button type="submit">Add Employee</button>
    </form>
    <?php 
    if (isset($_SESSION['added']) && $_SESSION['added'] == true) {
        echo '<br> <h3 style="color:brown;">
        New employee added successfully</h3>';
        $_SESSION['added'] = false;
    }
    ?>

</div>
</body>
</html>