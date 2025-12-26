<?php
include "../db.php"; // common DB connection

if (isset($_POST['date']) && isset($_POST['time'])) {

    $date    = $_POST['date'];
    $time    = $_POST['time'];
    $message = $_POST['message'];

    $sql = "INSERT INTO online_appointment 
            (appointment_date, appointment_time, message)
            VALUES 
            ('$date', '$time', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Appointment booked successfully!');
                window.location.replace('index.html');
              </script>";
    } else {
        echo "<script>
                alert('Error while booking appointment!');
                window.location.replace('index.html');
              </script>";
    }
}
?>
