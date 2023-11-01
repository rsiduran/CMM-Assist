<?php
session_start();
include '../backend/config.php';

if (isset($_GET['image_id'])) {
    $sql = "SELECT pic_type, pic_data FROM doctor_acc WHERE doctor_id = ?";
    $statement = $connect->prepare($sql);
    $statement->bind_param("i", $_GET['image_id']);
    $statement->execute();
    $result = $statement->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        header("Content-type: " . $row["pic_type"]);
        echo $row["pic_data"];
    } else {
        echo "Image not found";
    }
}
?>
