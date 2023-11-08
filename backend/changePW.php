<?php
include 'config.php';

if (isset($_GET['doc'])) {
    $docId = $_GET['doc'];
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $currentPassword = htmlspecialchars($_POST["current-pw"]);
        $newPass = htmlspecialchars($_POST["new-pw"]);
        $retypeNewPass = htmlspecialchars($_POST["retype-new-pw"]);
        $hashedNewPass = password_hash($newPass, PASSWORD_DEFAULT);

        $query =  "SELECT doctor_password FROM `doctor_acc` WHERE doctor_id = $docId";
        $result = mysqli_query($connect, $query);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $currentPW = $row['doctor_password'];
            mysqli_free_result($result);
            if (password_verify($currentPassword, $currentPW)) {

                $updateQuery = "UPDATE `doctor_acc` SET doctor_password = '$hashedNewPass' WHERE doctor_id = '$docId'";
                $result = mysqli_query($connect, $updateQuery);
                if ($result == true) {
                    header("Location: ../pages/doctors.php?message=Password updated successfully");
                    exit();
                } else {
                    header("Location: ../pages/doctors.php?message=Failed to update password");
                    exit();
                }
            } else {
                header("Location: ../pages/doctors.php?message=Passwords do not match.");
            }
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }
}
?>


<?php
    if(isset($_GET['patientPW'])) {
        $patientId = $_GET['patientPW'];
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $currentPassword = htmlspecialchars($_POST["current-pw"]);
            $newPass = htmlspecialchars($_POST["new-pw"]);
            $retypeNewPass = htmlspecialchars($_POST["retype-new-pw"]);
            $hashedNewPass = password_hash($newPass, PASSWORD_DEFAULT);
    
            $query =  "SELECT accountpw FROM `appointments` WHERE appointment_id = $patientId";
            $result = mysqli_query($connect, $query);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $currentPW = $row['accountpw'];
                mysqli_free_result($result);
                if (password_verify($currentPassword, $currentPW)) {
    
                    $updateQuery = "UPDATE `appointments` SET accountpw = '$hashedNewPass' WHERE appointment_id = '$patientId'";
                    $result = mysqli_query($connect, $updateQuery);
                    if ($result == true) {
                        header("Location: ../pages/patientAccount.php?message=Password updated successfully");
                        exit();
                    } else {
                        header("Location: ../pages/patientAccount.php?message=Failed to update password");
                        exit();
                    }
                } else {
                    header("Location: ../pages/patientAccount.php?message=Passwords do not match.");
                }
            } else {
                echo "Error: " . mysqli_error($connection);
            }
        }
    }
?>




