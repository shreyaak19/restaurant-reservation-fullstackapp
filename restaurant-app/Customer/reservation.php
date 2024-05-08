<?php

require_once('../Connect.php');

$name = mysqli_real_escape_string($connection, $_POST['name']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$phone = mysqli_real_escape_string($connection, $_POST['phone']);
$num_guest = mysqli_real_escape_string($connection, $_POST['num_guest']);
$date = mysqli_real_escape_string($connection, $_POST['date']);
$time = mysqli_real_escape_string($connection, $_POST['time']);
$comment = mysqli_real_escape_string($connection, $_POST['comment']);

$verify_reservation = $connection->prepare("SELECT * FROM `reservation` WHERE name = ? AND email = ? AND phone = ? AND num_guest = ? AND date = ? AND time = ?");
$verify_reservation->bind_param("ssssss", $name, $email, $phone, $num_guest, $date, $time);
$verify_reservation->execute();
$verify_reservation_result = $verify_reservation->get_result();

$hourlyCapacity = 30; 

function getReservedGuestsCount($connection, $date, $hour)
{
    $query = "SELECT SUM(num_guest) as total_guests FROM `reservation` WHERE date = ? AND HOUR(time) = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("ss", $date, $hour);
    $stmt->execute();

    $stmt->bind_result($total_guests);

    $stmt->fetch();

    $stmt->close();

    return $total_guests ?? 0;
}

$hour = date('H', strtotime($time));

if (getReservedGuestsCount($connection, $date, $hour) + $num_guest > $hourlyCapacity) {
    header("location: CustResFull.php");
    exit();
} else if ($verify_reservation_result->num_rows > 0) {
    header("location: CustResExist.php");
    exit();
} else {
    $query = "INSERT INTO `reservation` (name, email, phone, num_guest, date, time, comment, cust_id) VALUES (?, ?, ?, ?, ?, ?, ?, '{$_SESSION['cust_id']}')";
    $insert_reservation = $connection->prepare($query);
    $insert_reservation->bind_param("sssssss", $name, $email, $phone, $num_guest, $date, $time, $comment);
    if ($insert_reservation->execute()) {
        header("location: CustRes.php?name=$name&email=$email&phone=$phone&num_guest=$num_guest&date=$date&time=$time&comment=$comment");
        exit();
    } else {
        echo "Error in reservation: " . $insert_reservation->error;
    }
}

?>