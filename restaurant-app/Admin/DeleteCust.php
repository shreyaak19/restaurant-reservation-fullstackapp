<?php
require_once('../Connect.php');

if(isset($_GET['deleteID'])){
    $delete = $_GET['deleteID'];
    $res_request = "DELETE FROM reservation WHERE cust_id=$delete";
    $res_result = mysqli_query($connection, $res_request);
    $request = "DELETE FROM customer WHERE cust_id=$delete";
    $result = mysqli_query($connection, $request);
    
    if($result && $res_result){
        echo "Customer Deleted";
    }
    header("Location: ManageCust.php");
}

exit();