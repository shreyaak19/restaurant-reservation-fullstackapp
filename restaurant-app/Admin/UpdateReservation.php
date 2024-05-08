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

</section>

<div class="login">
    <h1>Update Reservation</h1>

    <form action="UpdateReservationBackend.php?updateid=<?php echo $_GET['updateid']; ?>" method="post">
        <div class="flex">
            <div class="box">
                <p>Name</p>
                <input for="name" type="text" name="name" maxlength="50" class="input">
            </div>
            <div class="box">
                <p>Email</p>
                <input for="email" type="email" name="email" maxlength="50" class="input">
            </div>
            <div class="box">
                <p>Phone No.</p>
                <input for="phone" type="tel" name="phone" maxlength="10" min="0" max="9999999999" class="input">
            </div>
            <div class="box">
                <p>No. of Guests</p>
                <select for="num_guest" name="num_guest" class="input" required>
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="box">
                <p>Date</p>
                <input for="date" type="date" name="date" class="input" min="<?= date('Y-m-d') ?>"required>
            </div>
            <div class="box">
                <p>Time</p>
                <input for="time" type="time" name="time" class="input" required>
            </div>
            <div class="box">
                <p>Comments</p>
                <input for="comment" type="text" name="comment" maxlength="50" placeholder="add any additional comments here" class="input">
            </div>

        </div>
        <input type="submit" value="Update Reservation" name="book" class="btn">
    </form> 
</div>

</body>

</html>
