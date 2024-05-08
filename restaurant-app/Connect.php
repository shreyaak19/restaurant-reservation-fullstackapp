<?php

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

    static $connection;
    if(!isset($connection)){
        $connection = mysqli_connect('localhost','admin','4604','restaurant-db')
            or die(mysqli_connect_error());
    }
    if($connection == false){
         echo "Unable to connect";
         echo mysqli_connect_error();
    }

?>