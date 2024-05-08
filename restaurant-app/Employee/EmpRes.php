<?php
require_once('../Connect.php');

$current_date = date('Y-m-d');
$current_time = date('H:i:s');

$request = "select * from reservation WHERE date > '$current_date' 
OR (date = '$current_date' AND time > '$current_time')";

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
      <a href="EmpHome.php">Employee Home</a>
      <a href="../LogOut.php">Log Out</a>
   </nav>

<table>
<h1> View Upcoming Reservations <h1>
    <thead>
    <tr>
        <th>Name</th>
        <th>Number of Guests</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Time</th>
        <th>Date</th>
        <th>Comment</th>
        <th></th>
    </tr>
    </thead>
        <?php
        if ($query && mysqli_num_rows($query) == 0) {
          echo '<br><h1 style="color: var(--sub-color);">No reservations found<h1>';
       }
       else {
          while($row = $query->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['num_guest'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['time'];?></td>
            <td><?php echo $row['date'];?></td>
            <td><?php echo $row['comment'];?></td>
            <!-- <td class="reservation-delete">
               <button class="btn btn-danger">
                   <a href="deleteReservation.php?deleteID=<?php echo $row['book_id'];?>">Delete</a>
               </button>
            </td> -->
        </tr>
        <?php
          }}
        ?>
</table>
</section>
</body>
</html>