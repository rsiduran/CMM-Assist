<?php
// Include the database configuration file
include 'config.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        echo "<script>alert('Please fill in all input fields.');</script>";
    } else {
        // Admin login
        $admin_query = "SELECT admin_id, admin_username, admin_password FROM `admin` WHERE admin_username = ?";
        $stmt = $connect->prepare($admin_query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($admin_id, $admin_username, $admin_password);
        $stmt->fetch();

        // Validate the user's credentials
        if ($admin_username && $password === $admin_password) {
            $_SESSION["admin_id"] = $admin_id;
            $_SESSION["admin_username"] = $admin_username;

            // Redirect to the admin dashboard
            header("Location: ../pages/admin.php");
        } else {
            // Regular user (doctor) login
            $stmt->close();
            
            $account_query = "SELECT doctor_id, doctor_username, doctor_password, doctor_occupation FROM `doctor_acc` WHERE doctor_username = ?";
            $stmt = $connect->prepare($account_query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->bind_result($doctor_id, $doctor_username, $doctor_password, $doctor_occupation);
            $stmt->fetch();

            // Validate the user's credentials
            if ($doctor_username && password_verify($password, $doctor_password)) {
                $_SESSION["doctor_id"] = $doctor_id;
                $_SESSION["doctor_username"] = $doctor_username;
                $_SESSION["doctor_occupation"] = $doctor_occupation;

                // Redirect based on occupation
                switch ($doctor_occupation) {
                    case "doctor":
                        header("Location: ../pages/doctors.php");
                        break;
                    case "nurse":
                        header("Location: ../pages/nurse.php");
                        break;
                    case "medical_staff":
                        header("Location: mema.php");
                        break;
                    default:
                        // Handle errors for invalid user occupation
                        echo "Invalid user occupation.";
                        break;
                }
            } else {
                // Invalid login
                echo "<script>alert('Invalid Password!');</script>";
                header("Location: ../index.html");
            }
            
            $stmt->close();
        }

        $connect->close();
    }
}
?>
