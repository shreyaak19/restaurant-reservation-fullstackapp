<?php
require_once('../Connect.php');

if(isset($_GET['deleteID'])){
    $delete = $_GET['deleteID'];
    $request = "DELETE FROM administrator WHERE admin_id=$delete";
    $result = mysqli_query($connection, $request);
    if($result){
        echo "Reservation Deleted";
    }
    header("Location: ManageAdmin.php");
}

exit();
