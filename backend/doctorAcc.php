<?php
error_reporting(E_ALL); 
ini_set('display_errors', '1');

// connect php
include 'config.php';

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// requesting data
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // initialize variables with htmlspecialchars
    $doctor_firstname = htmlspecialchars($_POST["fname"]);
    $doctor_lastname = htmlspecialchars($_POST["lname"]);
    $doctor_username = htmlspecialchars($_POST["uname"]);
    $doctor_password = password_hash($_POST["pword"], PASSWORD_DEFAULT);
    $doctor_email = htmlspecialchars($_POST["email"]);
    $doctor_occupation = htmlspecialchars($_POST["occupation"]);

    // if any data inputs are empty
    if (empty($doctor_firstname) || empty($doctor_lastname) || empty($doctor_username) || empty($doctor_password) || empty($doctor_email) || $doctor_occupation == "null") {
        echo "<script>alert('Please fill in all input fields.');</script>";
    } else {

        $pasok_sa_sql = "INSERT INTO doctor_acc (doctor_firstname, doctor_lastname, doctor_username, doctor_password, doctor_email, doctor_occupation, account_created) VALUES (?, ?, ?, ?, ?, ?, NOW())";

        $stmt = $connect->prepare($pasok_sa_sql);
        $stmt->bind_param("ssssss", $doctor_firstname, $doctor_lastname, $doctor_username, $doctor_password, $doctor_email, $doctor_occupation); 

        // notify the user
        if ($stmt->execute()) {
            echo "<script>alert('Account Successfully Created.');</script>";
            header("Location: ../index.html");
        } else {
            echo "Error: " . $stmt->error;
        }

        // close the connection
        $stmt->close();
    }
    $connect->close();
}

?>
