<?php 

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    } else {
        // admin login
        $admin_query = "SELECT admin_id, admin_username, admin_password FROM `admin` WHERE admin_username = ?";

        $stmt_admin = $connect->prepare($admin_query);
        $stmt_admin->bind_param("s", $username);
        $stmt_admin->execute();
        $stmt_admin->bind_result($admin_id, $admin_username, $admin_password);
        $stmt_admin->fetch();
        $stmt_admin->close();

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
            $stmt_account = $connect->prepare($account_query);
            $stmt_account->bind_param("s", $username);
            $stmt_account->execute();
            $stmt_account->bind_result($doctor_id, $doctor_username, $doctor_password, $doctor_occupation);
            $stmt_account->fetch();
            $stmt_account->close();

            // validate login for doctor or medical staff
            if ($doctor_username && password_verify($password, $doctor_password)) {
                $_SESSION["doctor_id"] = $doctor_id;
                $_SESSION["doctor_username"] = $doctor_username;
                $_SESSION["doctor_occupation"] = $doctor_occupation;
                // redirect to user's occupation
                switch ($doctor_occupation) {
                    case "doctor":
                        header("Location: ../pages/doctors.php?error=successlogin");
                        break;
                }
            } else { 
                 // patient login
                 $patient_query = "SELECT appointment_id, accountpw FROM `appointments` WHERE appointment_id = ?";
                 $stmt_patient = $connect->prepare($patient_query);
                 $stmt_patient->bind_param("s", $username);
                 $stmt_patient->execute();
                 $stmt_patient->store_result();
                 $stmt_patient->bind_result($appointment_id, $accountpw);
                 $stmt_patient->fetch();
                 
                 
                 // Validate patient login
                 if ($stmt_patient->num_rows > 0 && password_verify($password, $accountpw)) {
                     $_SESSION["appointment_id"] = $appointment_id;
                     $_SESSION["patient_username"] = $patient_username; // store username
                     
                     // go to patient account page
                     header("Location: ../pages/patientAccount.php?error=successlogin");
                 } else {
                     // invalid login
                     echo "<script>alert('Invalid Password!');</script>";
                     header("Location: ../index.php?error=error");
                 }
                 $stmt_patient->close();
             }
            $connect->close();
        }
    }
?>