<?php

require_once('../Connect.php');

    $cust_username = $_POST['cust_username'];
    $cust_password = $_POST['cust_password'];

   $query = "SELECT * FROM customer WHERE cust_username = '$cust_username' 
   AND cust_password = '$cust_password'";

    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $customer = mysqli_fetch_assoc($result);
        $_SESSION['cust_id'] = $customer['cust_id'];
        $_SESSION['cust_name'] = $customer['cust_name'];
        $_SESSION['cust_username'] = $customer['cust_username'];
        $_SESSION['cust_password'] = $customer['cust_password'];
        $_SESSION['cust_email'] = $customer['cust_email'];
        $_SESSION['cust_phone'] = $customer['cust_phone'];
        $_SESSION['logged_in'] = 'cust';
        header("Location: CustHome.php");
         exit();
    }
    else {
        $_SESSION['logged_in'] = 'none';
        header("Location: InvalidCust.php");
        exit();
    }

?>

