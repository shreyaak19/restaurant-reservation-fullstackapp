<?php
require_once('../Connect.php');

if(isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $type = $_POST['emp_type'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


    $query = "UPDATE employee 
    SET emp_email = '$email', 
        emp_type = '$type', 
        emp_name = '$name', 
        emp_phone = '$phone' 

    WHERE emp_id = '$id';";

    $result = mysqli_query($connection, $query);
    if ($result) {
        echo "Employee Updated";
        header("Location: ManageEmp.php");
    }
};

?>