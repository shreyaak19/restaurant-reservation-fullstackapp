<?php
require_once('../Connect.php');

if(isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $cust_name = $_POST['cust_name'];
    $cust_username = $_POST['cust_username'];
    $cust_email = $_POST['cust_email'];
    $cust_phone = $_POST['cust_phone'];


    $query = "UPDATE customer 
    SET cust_name = '$cust_name', 
        cust_username = '$cust_username', 
        cust_email = '$cust_email', 
        cust_phone = '$cust_phone' 
    WHERE cust_id = '$id';";

    $result = mysqli_query($connection, $query);
    if ($result) {
        echo "Customer Updated";
        header("Location: ManageCust.php");
    }
};

?>