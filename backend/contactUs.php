<?php

include 'config.php';

if(isset($_POST['submit'])) {
    $inquiry_name = $_POST['inquiry_name'];
    $inquiry_email = $_POST['inquiry_email'];
    $inquiry_message = $_POST['inquiry_message'];


    $inquiry_name = mysqli_real_escape_string($connect, $inquiry_name);
    $inquiry_email = mysqli_real_escape_string($connect, $inquiry_email);
    $inquiry_message = mysqli_real_escape_string($connect, $inquiry_message);

    $inquiry = mysqli_query($connect, "INSERT INTO `inquiry` (name, email, message) VALUES ('$inquiry_name', '$inquiry_email', '$inquiry_message')") or die ('Query Failed');
    header("Location: ../index.html");
}   

?>