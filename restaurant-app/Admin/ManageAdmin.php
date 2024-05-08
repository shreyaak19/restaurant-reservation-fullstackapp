<?php
require_once('../Connect.php');

$request = "select * from administrator";
$query = mysqli_query($connection, $request);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sizzle & Spice Bistro</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../style.css">

</head>

<body style="text-align:center; display:flex;">

<section class="header">

   <div class="flex">
      <div class="img-logo">
         <img src="../images/ResLogo.png" alt="Restaurant Logo">
         
      </div>
      <a class="logo">Sizzle & Spice Bistro | Welcome, 
        <?php 
                if (isset($_SESSION['admin_name'])) {
                    echo $_SESSION['admin_name'];
                } else {
                    echo "Administrator";
                }
        ?>
      </a>
   </div>

   <nav class="navbar">
      <a href="../index.php">Home</a>
      <a href="../Menu.php">Menu</a>
      <a href="AdminHome.php">Admin Home</a>
      <a href="../LogOut.php">Log Out</a>
   </nav>
<table>
<h1> Manage Admins <h1>
    <thead>
    <?php

        if (mysqli_num_rows($query) != 0) {
    ?>
    <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone</th>
        <th></th>
    </tr>
    <?php } ?>
    </thead>
        <?php
        if ($query && mysqli_num_rows($query) == 0) {
            echo '<br><h1 style="color: var(--sub-color);">No Customers found<h1>';
         }
         else {
          while($row = $query->fetch_assoc()){
            
        ?>
        <tr>
            <td><?php echo $row['admin_name'];?></td>
            <td><?php echo $row['admin_username'];?></td>
            <td><?php echo $row['admin_email'];?></td>
            <td><?php echo $row['admin_phone'];?></td>
            <?php
            if($_SESSION['admin_id'] != $row['admin_id']){
                ?>
            <td class="reservation-delete">
               <button class="btn btn-danger">
                   <a href="DeleteAdmin.php?deleteID=<?php echo $row['admin_id'];?>">Delete</a>
               </button>
            </td>
            <?php
            }?>
        </tr>
        <?php
          }}
        ?>
</table>
</section>
</body>
</html>