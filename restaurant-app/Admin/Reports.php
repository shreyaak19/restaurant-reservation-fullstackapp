<?php

require_once('../Connect.php');

$currentDateTime = date("Y-m-d H:i:s");

$pastReservationQuery = "SELECT COUNT(*) as totalPastReservations FROM reservation WHERE date < '$currentDateTime'";
$pastReservationResult = mysqli_query($connection, $pastReservationQuery);
$pastReservationRow = mysqli_fetch_assoc($pastReservationResult);
$totalPastReservations = $pastReservationRow['totalPastReservations'];

$futureReservationQuery = "SELECT COUNT(*) as totalFutureReservations FROM reservation WHERE date >= '$currentDateTime'";
$futureReservationResult = mysqli_query($connection, $futureReservationQuery);
$futureReservationRow = mysqli_fetch_assoc($futureReservationResult);
$totalFutureReservations = $futureReservationRow['totalFutureReservations'];

$employeeQuery = "SELECT COUNT(*) as totalEmployees FROM employee";
$employeeResult = mysqli_query($connection, $employeeQuery);
$employeeRow = mysqli_fetch_assoc($employeeResult);
$totalEmployees = $employeeRow['totalEmployees'];

$customerQuery = "SELECT COUNT(*) as totalCustomers FROM customer";
$customerResult = mysqli_query($connection, $customerQuery);
$customerRow = mysqli_fetch_assoc($customerResult);
$totalCustomers = $customerRow['totalCustomers'];

$adminQuery = "SELECT COUNT(*) as totalAdmins FROM administrator";
$adminResult = mysqli_query($connection, $adminQuery);
$adminRow = mysqli_fetch_assoc($adminResult);
$totalAdmins = $adminRow['totalAdmins'];

?>


<?php
require_once('../Connect.php');

$employee_request = "select * from reservation";
$customer_request = "select * from reservation";
$reservation_request = "select * from reservation";
$employee_query = mysqli_query($connection, $employee_request);
$customer_query = mysqli_query($connection, $customer_request);
$reservation_query = mysqli_query($connection, $reservation_request);

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

<table class="last-change">
<h1> Total Reports <h1>
    <thead>
    <tr>
        <th>Report Type</th>
        <th>Total</th>
    </tr>
    </thead>
        <tr>
            <td>Total Number of Admins</td>
            <td><?php echo $totalAdmins;?></td>
        </tr>
        <tr>
        <td>Total Number of Employees</td>
            <td><?php echo $totalEmployees;?></td>
        </tr>
        <tr>
            <td>Total Number of Customers</td>
            <td><?php echo $totalCustomers;?></td>
        </tr>
        <tr> 
            <td>Total Number of Past Reservations</td>
            <td><?php echo $totalPastReservations;?></td>
        </tr>
        <tr> 
            <td>Total Number of Future Reservations</td>
            <td><?php echo $totalFutureReservations;?></td>
        </tr>
</table>
</section>
</body>
</html>
