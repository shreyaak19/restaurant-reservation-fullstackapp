<?php

session_start();

$_SESSION = array();

$_SESSION['logged_in'] = 'none';

header("Location: index.php");
exit();
?>