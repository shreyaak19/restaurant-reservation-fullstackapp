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
        <h1>Update Employee</h1>

        <form action="updateEmployeeBackend.php?updateid=<?php echo $_GET['updateid']; ?>" method="post">
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
                <label for="emp_type">Employee Type:</label>
                <select name="emp_type" id="emp_type">
                    <option value="Full-Time">Full-Time</option>
                    <option value="Part-Time">Part-Time</option>
                </select>


            </div>
            <input type="submit" value="Update Employee" name="update" class="btn">
        </form>
    </div>

    </body>

    </html>
















