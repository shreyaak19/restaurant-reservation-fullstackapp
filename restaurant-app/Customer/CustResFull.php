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

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <section class="header">

        <div class="flex">
            <div class="img-logo">
                <img src="../images/ResLogo.png" alt="Restaurant Logo">

            </div>
            <a class="logo">Sizzle & Spice Bistro | Welcome,
                <?php
                if (isset($_SESSION['customer_name'])) {
                    echo $_SESSION['customer_name'];
                } else {
                    echo "Customer";
                }
                ?>
            </a>
        </div>

        <nav class="navbar">
            <a href="../index.php">Home</a>
            <a href="../Menu.php">Menu</a>
            <a href="CustInfo.php">Account Info</a>
            <a href="../index.php">Log Out
                <?php $_SESSION['logged_out'] = true; ?>
            </a>
        </nav>

    </section>

    <section class="about" id="about">

        <section class="home" id="home">

            <section class="reservation" id="reservation">
                <form action="reservation.php" method="post">
                    <h3>Make a Reservation</h3>
                    <div class="flex">
                        <div class="box">
                            <p>Name</p>
                            <input type="text" name="name" maxlength="50" class="input">
                        </div>
                        <div class="box">
                            <p>Email</p>
                            <input type="email" name="email" maxlength="50" class="input">
                        </div>
                        <div class="box">
                            <p>Phone No.</p>
                            <input type="tel" name="phone" maxlength="10" min="0" max="9999999999" class="input">
                        </div>
                        <div class="box">
                            <p>No. of Guests</p>
                            <select name="num_guest" class="input" required>
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
                            <input type="date" name="date" class="input" required>
                        </div>
                        <div class="box">
                            <p>Time</p>
                            <input type="time" name="time" class="input" required>
                        </div>
                        <div class="box">
                            <p>Comments</p>
                            <input type="text" name="comment" maxlength="50" placeholder="add any additional comments here" class="input">
                        </div>

                    </div>
                    <input type="submit" value="Reserve" name="book" class="btn">
                </form>
                <br>
                <h3 style="color:brown;">
                    Reservation for this hour is full. Please choose a different time.
                </h3>
            </section>
        </section>

        <section class="services">

            <div class="box-container">

                <div class="box">
                    <img src="../images/icon-1.webp" alt="">
                    <h3>food & drinks</h3>
                    <p>View our menu for a detailed look at our offerings</p>
                </div>

                <div class="box">
                    <img src="../images/icon-2.webp" alt="">
                    <h3>indoor and outdoor dining</h3>
                    <p>Have your pick of indoor/outdoor seating at our Bistro</p>
                </div>

                <div class="box">
                    <img src="../images/icon-3.webp" alt="">
                    <h3>aesthetics</h3>
                    <p>Come dine in and enjoy our ambiance</p>
                </div>

            </div>

        </section>



        <div class="row">
            <div class="image">
                <img src="../images/customer-service.png" alt="">
            </div>
            <div class="content">
                <h3>Contact Information</h3>
                <p> Please call us to cancel a reservation <br>
                    Restaurant Phone Number: (703)-123-4567</p>
                <p>Send inquiries to: sizzlespicebistro@gmail.com</p>
            </div>
        </div>

    </section>



</body>

</html>