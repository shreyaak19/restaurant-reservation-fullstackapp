<?php
require_once('../Connect.php');

if(isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
    $num_guest = $_POST['num_guest'];
    $comment = $_POST['comment'];
    $name = $_POST['name'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $phone = $_POST['phone'];
    $query = "UPDATE reservation 
    SET num_guest = '$num_guest', 
        comment = '$comment', 
        name = '$name', 
        phone = '$phone', 
        time = '$time', 
        date = '$date'
    WHERE book_id = '$id';";

    $result = mysqli_query($connection, $query);
    if ($result) {
        echo "Reservation Updated";
        header("Location: AdminRes.php");
    }
};

?>