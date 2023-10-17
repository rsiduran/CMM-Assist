<?php
// display error if meron
error_reporting(E_ALL);
ini_set('display_errors', '1');

// connect to db
include 'config.php';

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $doctor_firstname = htmlspecialchars($_POST["fname"]);
    $doctor_lastname = htmlspecialchars($_POST["lname"]);
    $doctor_username = htmlspecialchars($_POST["uname"]);
    $doctor_password = password_hash($_POST["pword"], PASSWORD_DEFAULT);
    $doctor_email = htmlspecialchars($_POST["email"]);
    $doctor_occupation = htmlspecialchars($_POST["occupation"]);

    // check for duplication of un and pw
    $duplicate = mysqli_query($connect, "SELECT * FROM `doctor_acc` WHERE doctor_username = '$doctor_username' OR doctor_email = '$doctor_email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Username or email already exists.');</script>";
        header("Location: ../pages/admin.php?message=Username or email already exists.");
        exit; // Stop execution to prevent further processing.
    } else {

        // if walang data inputs
        if (empty($doctor_firstname) || empty($doctor_lastname) || empty($doctor_username) || empty($doctor_password) || empty($doctor_email) || $doctor_occupation == "null") {
            echo "<script>alert('Please fill in all input fields.');</script>";
        } else {
            $pasok_sa_sql = "INSERT INTO doctor_acc (doctor_firstname, doctor_lastname, doctor_username, doctor_password, doctor_email, doctor_occupation, account_created) VALUES (?, ?, ?, ?, ?, ?, NOW())";

            $stmt = $connect->prepare($pasok_sa_sql);
            $stmt->bind_param("ssssss", $doctor_firstname, $doctor_lastname, $doctor_username, $doctor_password, $doctor_email, $doctor_occupation);

            // execute the query if success of failed
            if ($stmt->execute()) {
                echo "<script>alert('Account Successfully Created.');</script>";
                header("Location: ../pages/admin.php?message=Account Successfully Created.");
                exit; // Stop execution to prevent further processing.
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    }

    // close the db connection
    $connect->close();
}
?>
