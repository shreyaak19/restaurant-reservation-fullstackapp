<?php

require_once('../Connect.php');


$emp_shift = $_POST['emp_shift'];

$get_query = "SELECT hours_worked FROM employee WHERE emp_id = '{$_SESSION['emp_id']}'";
$get_result = mysqli_query($connection, $get_query);

if ($get_result && mysqli_num_rows($get_result) > 0) {
    $row = mysqli_fetch_assoc($get_result);
    $current_hours = $row['hours_worked'];

    $new_hours = $current_hours + $emp_shift;

    $query = "UPDATE employee SET hours_worked = '$new_hours' 
    WHERE emp_id = '{$_SESSION['emp_id']}'";

    $result = mysqli_query($connection, $query);

    if ($result) {
        $_SESSION['hours'] = true;
         header("Location: EmpShift.php");
         exit();
    }
}
?>