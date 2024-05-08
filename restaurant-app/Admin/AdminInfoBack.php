<?php

require_once('../Connect.php');

    $admin_password = $_POST['admin_password'];

    $query = "UPDATE administrator SET admin_password = '$admin_password' WHERE admin_id = '{$_SESSION['cust_id']}'";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("Location: AdminInfoPassChange.php");
        exit();
    }

?>