<?php

require_once('../Connect.php');

    $emp_password = $_POST['emp_password'];

    $query = "UPDATE employee SET emp_password = '$emp_password' WHERE emp_id = '{$_SESSION['emp_id']}'";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("Location: EmpInfoPassChange.php");
        exit();
    }

?>