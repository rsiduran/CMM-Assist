<?php
// db connection
include 'config.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        echo "<script>alert('Please fill in all input fields.');</script>";
    } else {
        // admin login
        $admin_query = "SELECT admin_id, admin_username, admin_password FROM `admin` WHERE admin_username = ?";
        $stmt = $connect->prepare($admin_query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($admin_id, $admin_username, $admin_password);
        $stmt->fetch();

        // validate admin login
        if ($admin_username && $password === $admin_password) {
            $_SESSION["admin_id"] = $admin_id;
            $_SESSION["admin_username"] = $admin_username;

            // will go to the admin dashboard
            header("Location: ../pages/admin.php?error=successlogin");
        } else {
            $stmt->close();
            // account created login
            
            $account_query = "SELECT doctor_id, doctor_username, doctor_password, doctor_occupation FROM `doctor_acc` WHERE doctor_username = ?";
            $stmt = $connect->prepare($account_query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->bind_result($doctor_id, $doctor_username, $doctor_password, $doctor_occupation);
            $stmt->fetch();

            // validate login
            if ($doctor_username && password_verify($password, $doctor_password)) {
                $_SESSION["doctor_id"] = $doctor_id;
                $_SESSION["doctor_username"] = $doctor_username;
                $_SESSION["doctor_occupation"] = $doctor_occupation;

                // mapupunta sa designated occupation webpage
                switch ($doctor_occupation) {
                    case "doctor":
                        header("Location: ../pages/doctors.php?error=successlogin");
                        break;
                    case "nurse":
                        header("Location: ../pages/nurse.php?error=successlogin");
                        break;
                    case "medical_staff":
                        header("Location: ../pages/med.php?error=successlogin");
                        break;
                    default:
                        // error handling
                        echo "Invalid user occupation.";
                        break;
                }
            } else {
                // invalid login
                echo "<script>alert('Invalid Password!');</script>";
                header("Location: ../index.php?error=error");
            }
            
            $stmt->close();
        }

        $connect->close();
    }
}
?>
