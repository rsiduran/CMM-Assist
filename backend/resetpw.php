<?php
include 'config.php';

if (isset($_GET['reset'])) {
    $resetId = $_GET['reset'];
    $newPW = '123';
    $hashedNewPass = password_hash($newPW, PASSWORD_DEFAULT);
    
        $updateQuery = "UPDATE `doctor_acc` SET doctor_password = '$hashedNewPass' WHERE doctor_id = '$resetId'";
        $result = mysqli_query($connect, $updateQuery);
        if ($result == true) {
            header("Location: ../pages/admin.php?message=Password reset successfully");
            exit();
        } else {
            header("Location: ../pages/admin.php?message=Failed to update password");
            exit();
        }
    }
?>

<?php
    if(isset($_GET['del'])) {
        $del = $_GET['del']; 
        $query = "DELETE FROM doctor_acc WHERE doctor_id=$del";

        $result = mysqli_query($connect, $query);

        if ($result == true) {
            header("Location: ../pages/admin.php?error=deleted");
            exit();
        } else {
            header("Location: ../pages/admin.php?error=error");
            exit();
        }
    }
?>
