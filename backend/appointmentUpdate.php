
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

<?php
    $dataAppointment = "SELECT * FROM `appointments` WHERE appointment_id = '$appointmentId'";
    $appointment = mysqli_query($connect, $dataAppointment);

    if (mysqli_num_rows($appointment) > 0){ 
        while ($fetch_appointment = mysqli_fetch_assoc($appointment)){
            $userName = $fetch_appointment['appointment_id'] . '' . $fetch_appointment['firstName'];
            $defaultPass = '123';
            $userEmail = $fetch_appointment['email'];
        }
    }
?>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script type="text/javascript">
    (function(){
        emailjs.init("user_VDnwE8jsLUXdrKM_Z");
    })();

    /*=============== EMAIL JS ===============*/
    function SendMail() {
        var params = {
            from_name: "CMM Assist",
            userName: "<?php echo $userName; ?>",
            defaultPass: "<?php echo $defaultPass; ?>",
            userEmail: "<?php echo $userEmail; ?>",
        }
        
        emailjs.send("service_v1az45w", "template_2lfehxt", params).then(function (res) {
            alert("success! " + res.status)
        });
    }

    SendMail();
</script>



