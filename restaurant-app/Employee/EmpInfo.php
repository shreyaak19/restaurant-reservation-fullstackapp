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
      <a class="logo">Sizzle & Spice Bistro | Welcome, 
        <?php 
        echo $_SESSION['emp_name'];?>
      </a>
   </div>

   <nav class="navbar">
      <a href="../index.php">Home</a>
      <a href="../Menu.php">Menu</a>
      <a href="EmpHome.php">Employee Home</a>
      <a href="../LogOut.php">Log Out</a>
   </nav>

    </section>

    <div class="login">
        <h1>Your Account Information</h1>

        <form action="EmpInfoBack.php" method="post">
            <br>
            <label for="cust_name">Name: <?php echo $_SESSION['emp_name']; ?> </label>
            <br>
            <label for="emp_username">Username: <?php echo $_SESSION['emp_username']; ?> </label>
            <br>
            <label for="password">Password: <?php echo $_SESSION['emp_password']; ?> </label>
            <br>
            <label for="emp_email">Email: <?php echo $_SESSION['emp_email']; ?> </label>
            <br>
            <label for="emp_phone">Phone: <?php echo $_SESSION['emp_phone']; ?> </label>
            <br>
            <label for="emp_password">Enter new password:
                <input type="text" name="emp_password" id="emp_password" required>
            </label>
            <button type="submit">Change Password</button>
            <br>
        </form>
    </div>

</body>

</html>