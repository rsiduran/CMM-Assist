<?php
    include '../backend/config.php';
    if(isset($_GET['delete'])) {
        $deleteId = $_GET['delete']; 
        $query = "DELETE FROM records WHERE record_id=$deleteId";

        $result = mysqli_query($connect, $query);

        if ($result == true) {
            header("Location: ../pages/doctors.php?error=deleted");
            exit();
        } else {
            header("Location: ../pages/doctors.php?error=error");
            exit();
        }
    }
?>