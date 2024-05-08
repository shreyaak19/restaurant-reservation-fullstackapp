
<?php

require_once('../Connect.php');

$currentDateTime = date("Y-m-d H:i:s");

$sql_query = "
    SELECT DATE_FORMAT(time, '%l:%i %p') AS reservation_hour, COUNT(*) AS reservation_count
    FROM reservation
    WHERE DATE(date) = CURDATE()
    GROUP BY reservation_hour;
";
$result = mysqli_query($connection, $sql_query);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$chart_data = array();
foreach ($data as $row) {
    $chart_data[] = array(
        "reservation_hour" => $row["reservation_hour"],
        "reservation_count" => (int)$row["reservation_count"]
    );
}
$json_data = json_encode($chart_data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Report</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            color: #212121;
        }
    </style>
</head>
<body style="background-color: #fff">
<body>
    <?php
    $currentDate = date("Y-m-d");
    ?>
    <h2>Restaurant Busy Hours: <?php echo $currentDate; ?></h2>
    <canvas id="reservationChart" width="400" height="100"></canvas>

    <script>
        var ctx = document.getElementById('reservationChart').getContext('2d');
        var data = <?php echo $json_data; ?>;

        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: data.map(entry => entry.reservation_hour),
                datasets: [{
                    label: 'Restaurant Busy Hours',
                    data: data.map(entry => entry.reservation_count),
                    backgroundColor: '#212121',
                    borderColor: '#212121',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>