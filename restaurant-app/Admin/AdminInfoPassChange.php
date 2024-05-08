<?php

require_once('../Connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sizzle & Spice Bistro: Create Account</title>

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
      <a class="logo">Sizzle & Spice Bistro | Welcome, 
        <?php 
        echo $_SESSION['admin_name'];?>
      </a>
   </div>

   <nav class="navbar">
      <a href="../index.php">Home</a>
      <a href="../Menu.php">Menu</a>
      <a href="AdminHome.php">Admin Home</a>
      <a href="../LogOut.php">Log Out</a>
   </nav>

    </section>

    <div class="login">
        <h1>Your Account Information</h1>

        <form action="AdminInfoBack.php" method="post">
            <br>
            <label for="admin_name">Name: <?php echo $_SESSION['admin_name']; ?> </label>
            <br>
            <label for="admin_username">Username: <?php echo $_SESSION['admin_username']; ?> </label>
            <br>
            <label for="password">Password: <?php echo $_SESSION['admin_password']; ?> </label>
            <br>
            <label for="admin_email">Email: <?php echo $_SESSION['admin_email']; ?> </label>
            <br>
            <label for="admin_phone">Phone: <?php echo $_SESSION['admin_phone']; ?> </label>
            <br>
            <label for="admin_password">Enter new password:
                <input type="text" name="admin_password" id="admin_password" required>
            </label>
            <button type="submit">Change Password</button>
            <br>
            <h3 style="color:brown;">
            Password changed successfully
            </h3>
        </form>
    </div>

</body>

</html>