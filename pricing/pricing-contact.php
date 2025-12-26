<?php
include "../db.php"; // common DB connection

if (isset($_POST['name'])) {

    $name     = $_POST['name'];
    $company  = $_POST['company'];
    $location = $_POST['location'];
    $email    = $_POST['email'];
    $mobile   = $_POST['mobile'];
    $message  = $_POST['message'];

    $sql = "INSERT INTO pricing_contact 
            (name, company, location, email, mobile, message)
            VALUES 
            ('$name', '$company', '$location', '$email', '$mobile', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Form submitted successfully!');
                window.location.replace('index.html');
              </script>";
    } else {
        echo "<script>
                alert('Error while submitting. Please try again!');
                window.location.replace('index.html');
              </script>";
    }
}
?>
