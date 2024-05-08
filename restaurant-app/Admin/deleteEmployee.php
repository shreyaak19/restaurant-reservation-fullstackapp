<?php

if(session_status() == PHP_SESSION_NONE){
    session_start();
}
function get_connection(){
    static $connection;
    if(!isset($connection)){
        $connection = mysqli_connect('localhost','admin','4604','restaurant-db')
        or die(mysqli_connect_error());
        echo "Connected Successfully";
    }
    if($connection == false){
        echo "Unable to connect";
        echo mysqli_connect_error();
    }
    $emp_id = $_POST['emp_id'];
    $query = "DELETE FROM employee
    WHERE emp_id = '$emp_id'";
     if ($connection->query($query) === TRUE) {
         echo "Employee Deleted";
     }
    return $connection;
}
get_connection();


