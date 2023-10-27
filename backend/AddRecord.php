<?php
    include 'config.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = mysqli_real_escape_string($connect, $_POST['name']);
        $gender = mysqli_real_escape_string($connect, $_POST['gender']);
        $contact = mysqli_real_escape_string($connect, $_POST['contact']);
        $age = mysqli_real_escape_string($connect, $_POST['age']);
        $height = mysqli_real_escape_string($connect, $_POST['height']);
        $weight = mysqli_real_escape_string($connect, $_POST['weight']);
        $phone = mysqli_real_escape_string($connect, $_POST['phone']);
        $address = mysqli_real_escape_string($connect, $_POST['address']);
        $allergies = mysqli_real_escape_string($connect, $_POST['allergies']);
        $medication = mysqli_real_escape_string($connect, $_POST['medication']);
        $conditions = mysqli_real_escape_string($connect, $_POST['conditions']);
        $contactPerson = mysqli_real_escape_string($connect, $_POST['contactPerson']);
        $contactPersonNumber = mysqli_real_escape_string($connect, $_POST['contactPersonNumber']);
        $alcohol = mysqli_real_escape_string($connect, $_POST['alcohol']);
        $presentConditions = mysqli_real_escape_string($connect, $_POST['presentConditions']);

        $query = "INSERT INTO records (names, gender, contactEmail, edad, height, weightlbs, phoneNumber, addresss, allergies, medication, pastConditions, contactPerson, contactPersonNumber, alak, presentConditions) VALUES ('$name','$gender','$contact','$age','$height','$weight','$phone','$address','$allergies','$medication','$conditions','$contactPerson','$contactPersonNumber','$alcohol','$presentConditions')";
        $result = mysqli_query($connect, $query);
        if ($result == true) {
            header("Location: ../pages/doctors.php?error=none");
            exit();
        } else {
            header("Location: ../pages/doctors.php?error=error");
            exit();
        }
    }
?>