<?php
require_once('../Connect.php');

$filter_res = '';

if (isset($_POST['filter_res'])) {
   $filter_res = $_POST['filter_res'];
}

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
                if (isset($_SESSION['cust_name'])) {
                    echo $_SESSION['cust_name'];
                } else {
                    echo "Customer";
                }
        ?>
      </a>
   </div>

   <nav class="navbar">
      <a href="../index.php">Home</a>
      <a href="../Menu.php">Menu</a>
      <a href="CustHome.php">My Home</a>
      <a href="../LogOut.php">Log Out</a>
   </nav>

<table>
<h1> View & Edit Reservations <h1>
<form id="res_form" action="CustResView.php" method="POST">
    <select name="filter_res" id="filter_res">
    <option value="" <?php if ($filter_res == '') echo 'selected'; ?>></option>
    <option value="Future Reservations"<?php if ($filter_res == 'Future Reservations') echo ' selected'; ?>>Future Reservations</option>
    <option value="Past Reservations"<?php if ($filter_res == 'Past Reservations') echo ' selected'; ?>>Past Reservations</option>
    </select><br>
    <button type="submit">Filter Reservations</button>
    <thead>
    <?php
        $filter_res = isset($_POST['filter_res']) ? $_POST['filter_res'] : '';
        $current_date = date('Y-m-d');
        $current_time = date('H:i:s');
        
        if ($filter_res == '') {
           $request = "select * from reservation WHERE cust_id = '{$_SESSION['cust_id']}'";
        }
        else if ($filter_res == 'Future Reservations') {
           $request = "select * from reservation WHERE cust_id = '{$_SESSION['cust_id']}' AND (date > '$current_date' 
           OR (date = '$current_date' AND time > '$current_time'))";
        }
        else {
           $request = "select * from reservation WHERE cust_id = '{$_SESSION['cust_id']}' AND (date < '$current_date' 
           OR (date = '$current_date' AND time < '$current_time'))";
        }
        
        $query = mysqli_query($connection, $request);

        if (mysqli_num_rows($query) != 0) {
    ?>
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
    <?php
        }
        ?>
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
            <td class="reservation-update">
               <button class="btn btn-danger">
                   <a href="UpdateRes.php?updateid=<?php echo $row['book_id'];?>">Update</a>
               </button>
            </td>
            <td class="reservation-delete">
               <button class="btn btn-danger">
                   <a href="DeleteCustRes.php?deleteID=<?php echo $row['book_id'];?>">Delete</a>
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