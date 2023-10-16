<?php

// connect php
include 'config.php';

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // retrieve data from the database
    $stmt = $connect->prepare("SELECT doctor_id, doctor_username, doctor_password, doctor_occupation FROM doctor_acc WHERE doctor_username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($user_id, $db_username, $hashed_password, $occupation);
    $stmt->fetch();

    if ($db_username && password_verify($password, $hashed_password)) {
        // if login is successful, set session data
        $_SESSION["user_id"] = $user_id;
        $_SESSION["user_username"] = $db_username;
        $_SESSION["user_occupation"] = $occupation;

        // mapupunta sa kanya kanyang pages
        if ($occupation === "Doctor") {
            header("Location: doctors.php");
        } elseif ($occupation === "Nurse") {
            header("Location: nurse.php");
        } elseif ($occupation === "Medical Staff") {
            header("Location: mema.php");
        }
    } else {
        // Invalid login creds
        echo "Invalid username or password.";
    }

    $stmt->close();
    $connect->close();
}
?>

