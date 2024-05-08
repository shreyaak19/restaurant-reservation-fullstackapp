<?php
require_once('../Connect.php');

if(isset($_GET['deleteID'])){
    $delete = $_GET['deleteID'];
    $request = "DELETE FROM employee WHERE emp_id=$delete";
    $result = mysqli_query($connection, $request);
    if($result){
        echo "Employee Deleted";
    }
    header("Location: ManageEmp.php");
}

exit();