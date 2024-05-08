<?php

require_once('../Connect.php');

    $cust_name = $_POST['cust_name'];
    $cust_username = $_POST['cust_username'];
    $cust_password = $_POST['cust_password'];
    $cust_email = $_POST['cust_email'];
    $cust_phone = $_POST['cust_phone'];

   $query = "INSERT INTO customer (cust_name, cust_username, cust_password, cust_email, cust_phone)
        VALUES ('$cust_name', '$cust_username' , '$cust_password', '$cust_email', '$cust_phone')";

    $result = mysqli_query($connection, $query);

    header("Location: CustLogin.php");
    exit();

?>