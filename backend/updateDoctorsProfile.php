<?php
    include 'config.php';
    if (isset($_GET['docno'])) {
        $docno = mysqli_real_escape_string($connect, $_GET['docno']);
        $field = mysqli_real_escape_string($connect, $_POST['field']);
        $caption = mysqli_real_escape_string($connect, $_POST['caption']);
        $experience = mysqli_real_escape_string($connect, $_POST['experience']);

        $query = "UPDATE doctor_acc SET doctorField='$field', aboutYou='$caption', workExperience='$experience' WHERE doctor_id='$docno'";
        $result = mysqli_query($connect, $query);
        if ($result) {
            header("Location: ../pages/doctors.php?success=updated");
            exit();
        } else {
            header("Location: ../pages/doctors.php?error=error");
            exit();
        }
    }
?>
