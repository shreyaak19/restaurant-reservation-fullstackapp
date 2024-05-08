<?php

require_once('../Connect.php');


    $admin_username = $_POST['admin_username'];
    $admin_password = $_POST['admin_password'];

   $query = "SELECT * FROM administrator WHERE admin_username = '$admin_username' 
   AND admin_password = '$admin_password'";

    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $admin = mysqli_fetch_assoc($result);
        $_SESSION['admin_id'] = $admin['admin_id'];
        $_SESSION['admin_name'] = $admin['admin_name'];
        $_SESSION['admin_username'] = $admin['admin_username'];
        $_SESSION['admin_password'] = $admin['admin_password'];
        $_SESSION['admin_email'] = $admin['admin_email'];
        $_SESSION['admin_phone'] = $admin['admin_phone'];
        $_SESSION['logged_in'] = 'admin';
         header("Location: AdminHome.php");
         exit();
    }
    else {
        $_SESSION['logged_in'] = 'none';
        header("Location: InvalidAdmin.php");

        exit();
    }

?>