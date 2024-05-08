<?php

require_once('../Connect.php');
$emp_name = $_POST['emp_name'];
$emp_username = $_POST['emp_username'];
$emp_password = $_POST['emp_password'];
$emp_email = $_POST['emp_email'];
$emp_phone = $_POST['emp_phone'];
$emp_type = $_POST['emp_type'];

$query = "INSERT INTO employee (emp_name, emp_username, emp_password, emp_email, emp_phone, emp_type, hours_worked)
    VALUES ('$emp_name', '$emp_username' , '$emp_password', '$emp_email', '$emp_phone', '$emp_type', '0')";
$result = mysqli_query($connection, $query);
if ($result) {
    $_SESSION['added'] = true;
}
header("Location: AddEmp.php");
exit();
?>