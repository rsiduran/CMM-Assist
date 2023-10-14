<?php
// connect php
include 'config.php';

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// requesting data
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // initialed variables with htmlspecialchars
    $doctor_firstname = htmlspecialchars($_POST["fname"]);
    $doctor_lastname = htmlspecialchars($_POST["lname"]);
    $doctor_username = htmlspecialchars($_POST["uname"]);
    $doctor_password = htmlspecialchars($_POST["pword"]);
    $doctor_email = htmlspecialchars($_POST["email"]);
    $doctor_occupation = htmlspecialchars($_POST["occupation"]);

    // if walang data inputs
    if (empty($doctor_firstname) || empty($doctor_lastname) || empty($doctor_username) || empty($doctor_password) || empty($doctor_email) || $doctor_occupation == "null") {
        echo "<script>alert('Please fill-in all input fields.');</script>";
    } else {

        // Hash the password
        $hashed_password = password_hash($doctor_password, PASSWORD_DEFAULT);

        $pasok_sa_sql = "INSERT INTO doctor_acc (doctor_firstname, doctor_lastname, doctor_username, doctor_password, doctor_email, doctor_occupation, account_created) VALUES (?, ?, ?, ?, ?, ?, NOW())";

        $stmt = $connect->prepare($pasok_sa_sql);
        $stmt->bind_param("ssssss", $doctor_firstname, $doctor_lastname, $doctor_username, $hashed_password, $doctor_email, $doctor_occupation);

        // manonotify yung user
        if ($stmt->execute()) {
            echo "<script>alert('Account Successfully Created.');</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // close the connection
        $stmt->close();
    }
    $connect->close();
}


// PACHECK DIN NITO IF NOT WORKING SA TAAS


// if(isset($_POST['submit'])) {
//     // initialed variables with htmlspecialchars
//     $doctor_firstname = htmlspecialchars($_POST["fname"]);
//     $doctor_lastname = htmlspecialchars($_POST["lname"]);
//     $doctor_username = htmlspecialchars($_POST["uname"]);
//     $doctor_password = htmlspecialchars($_POST["pword"]);
//     $doctor_email = htmlspecialchars($_POST["email"]);
//     $doctor_occupation = htmlspecialchars($_POST["occupation"]);

//     // if walang data inputs
//     if (empty($doctor_firstname) || empty($doctor_lastname) || empty($doctor_username) || empty($doctor_password) || empty($doctor_email) || empty($doctor_occupation)) {
//         exit();
//         header("Location: ../pages/admin.php");
//     };

//     $pasok_sa_sql = mysqli_query($connect, "INSERT INTO `doctor_acc` (doctor_firstname, doctor_lastname, doctor_username, doctor_password, doctor_email, doctor_occupation) VALUES ('$doctor_firstname', '$doctor_lastname', '$doctor_username', '$doctor_password', '$doctor_email', '$doctor_occupation')") or die ('Query Failed');

// } else {
//     header("Location: ../pages/admin.php");
// };


?>