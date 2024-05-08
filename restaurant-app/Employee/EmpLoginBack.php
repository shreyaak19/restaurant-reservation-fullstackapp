<?php

require_once('../Connect.php');

    $emp_username = $_POST['emp_username'];
    $emp_password = $_POST['emp_password'];

   $query = "SELECT * FROM employee WHERE emp_username = '$emp_username' 
   AND emp_password = '$emp_password'";

    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $employee = mysqli_fetch_assoc($result);
        $_SESSION['emp_id'] = $employee['emp_id'];
        $_SESSION['emp_name'] = $employee['emp_name'];
        $_SESSION['emp_username'] = $employee['emp_username'];
        $_SESSION['emp_password'] = $employee['emp_password'];
        $_SESSION['emp_email'] = $employee['emp_email'];
        $_SESSION['emp_phone'] = $employee['emp_phone'];
        $_SESSION['emp_phone'] = $employee['emp_phone'];
        $_SESSION['emp_type'] = $employee['emp_type'];
        $_SESSION['emp_hours_worked'] = $employee['emp_hours_worked'];
        $_SESSION['logged_in'] = 'emp';
         header("Location: EmpHome.php");
         exit();
    }
    else {
        header("Location: InvalidEmp.php");
        exit();
    }
?>