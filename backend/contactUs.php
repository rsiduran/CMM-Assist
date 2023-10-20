<?php

include 'config.php';

if(isset($_POST['submit'])) {
    $inquiry_name = $_POST['inquiry_name'];
    $inquiry_email = $_POST['inquiry_email'];
    $inquiry_message = $_POST['inquiry_message'];


    $inquiry_name = mysqli_real_escape_string($connect, $inquiry_name);
    $inquiry_email = mysqli_real_escape_string($connect, $inquiry_email);
    $inquiry_message = mysqli_real_escape_string($connect, $inquiry_message);

    date_default_timezone_set('Asia/Manila');
    $date_time = new DateTime();
    $datestamp = $date_time->format('Y-m-d H:i:s');

    $inquiry = mysqli_query($connect, "INSERT INTO `inquiry` (name, email, message, datestamp) VALUES ('$inquiry_name', '$inquiry_email', '$inquiry_message', '$datestamp')") or die ('Query Failed');
    header("Location: ../pop.html");
    exit;
}   

?>