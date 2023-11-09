<?php
    session_start();
    include 'config.php';

    if (isset($_SESSION["doctor_id"])) {
        
    } else {
        // redirect to the login page and display an error message
        header("Location: ../index.php?error=notloggedin");
        echo "<script>alert('The doctor is not logged in.');</script>";
    }
?>

<?php
    if(isset($_GET['msg'])) {
        $appointmentId = $_GET['msg']; 

        //ditu is maglalagay ng codes abt emailing para sa accounts.

        $pw = '123';
        $hashedPassword = password_hash($pw, PASSWORD_BCRYPT);

        $query = "UPDATE appointments SET 
                accountpw='$hashedPassword', appointmentStatus='ON' 
                WHERE appointment_id=$appointmentId";

        $result = mysqli_query($connect, $query);

        if ($result == true) {
            header("Location: ../pages/doctors.php?error=confirmed appointment");
            exit();
        } else {
            header("Location: ../pages/doctors.php?error=error");
            exit();
        }
    }
?>

