<?php

require_once('../Connect.php');
$admin_name = $_POST['admin_name'];
$admin_username = $_POST['admin_username'];
$admin_password = $_POST['admin_password'];
$admin_email = $_POST['admin_email'];
$admin_phone = $_POST['admin_phone'];

$query = "INSERT INTO administrator (admin_name, admin_username, admin_password, admin_email, admin_phone)
    VALUES ('$admin_name', '$admin_username' , '$admin_password', '$admin_email', '$admin_phone')";
$result = mysqli_query($connection, $query);
if ($result) {
    $_SESSION['added'] = true;
}
header("Location: AddAdmin.php");
exit();
?>