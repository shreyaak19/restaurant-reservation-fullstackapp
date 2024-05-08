<?php

require_once('../Connect.php');

    $cust_password = $_POST['cust_password'];

    $query = "UPDATE customer SET cust_password = '$cust_password' WHERE cust_id = '{$_SESSION['cust_id']}'";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("Location: CustInfoPassChange.php");
        exit();
    }

?>
