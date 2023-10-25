<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $password = htmlspecialchars($_POST["current-pass"]);
    $newPass = htmlspecialchars($_POST["new-pass"]);
    $retypeNewPass = htmlspecialchars($_POST["retype-pass"]);

    $myPass = mysqli_query($connect, "SELECT * FROM `admin` WHERE admin_password = '$password'");

    if (mysqli_num_rows($myPass) == 0) {
        echo "<script>alert('Wrong Password');</script>";
        header("Location: ../pages/admin.php?message=Wrong Current Password.");
        exit;
    } else {
        if ($newPass == $retypeNewPass) {
            $sqlUpdate = "UPDATE `admin` SET admin_password = '$newPass'";
            $result = mysqli_query($connect, $sqlUpdate);
            if ($result) {
                header("Location: ../pages/admin.php?message=Successfully Changed Password.");
            } else {
                header("Location: ../pages/admin.php?message=Failed to Update Password.");
            }
        } else {
            header("Location: ../pages/admin.php?message=Passwords do not match.");
        }
    }
}
?>
