<?php
require_once('../Connect.php');

$request = "select * from employee";
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

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

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
<h1> Manage Employees <h1>
    <thead>
      <?php

         if (mysqli_num_rows($query) != 0) {
         ?>
    <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Type</th>
        <th>Hours Worked</th>
        <th></th>
    </tr>
    <?php } ?>
    </thead>
        <?php
          if ($query && mysqli_num_rows($query) == 0) {
            echo '<br><h1 style="color: var(--sub-color);">No Employees found<h1>';
         }
         else {
          while($row = $query->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['emp_name'];?></td>
            <td><?php echo $row['emp_username'];?></td>
            <td><?php echo $row['emp_email'];?></td>
            <td><?php echo $row['emp_phone'];?></td>
            <td><?php echo $row['emp_type'];?></td>
            <td><?php echo $row['hours_worked'];?></td>
            <td class="employee-update">
                <button class="btn btn-danger">
                    <a href="updateEmployee.php?updateid=<?php echo $row['emp_id'];?>">Update</a>
                </button>
            </td>
            <td class="reservation-delete">
               <button class="btn btn-danger">
                   <a href="DeleteEmp.php?deleteID=<?php echo $row['emp_id'];?>">Delete</a>
               </button>
            </td>
        </tr>
        <?php
          }}
        ?>
</table>
</section>
</body>
</html>