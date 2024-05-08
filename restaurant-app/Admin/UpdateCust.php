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
      <a href="../LoginHome.php">Login/Create Account</a>
   </nav>

</section>

<body style="text-align:center;">

<div class="login">
    <h1>
        Update Customer
    </h1>
    <form id="customerForm" action="UpdateCustBackend.php?updateid=<?php echo $_GET['updateid']; ?>" method="POST">
        <br>
        <div>Name:
            <input for="cust_name" type="text" id="cust_name" name="cust_name" required>
        </div>
        <br>
        <div>Username:
            <input for="cust_username" type="text" id="cust_username" name="cust_username" required>
        </div>
        <div for="cust_email">Email:
            <input  for="cust_email" type="email" id="cust_email" name="cust_email" required>
        </div>
        <br>
        <div>Phone:
            <input for="cust_phone" type="tel" id="cust_phone" name="cust_phone" maxlength="10" min="0" max="9999999999" required>
        </div>
        <button type="submit">Update</button>
    </form>

</div>
</body> 
</html>
