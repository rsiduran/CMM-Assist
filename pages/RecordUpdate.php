<?php
    session_start();
    include '../backend/config.php';

    if (isset($_SESSION["doctor_id"])) {
        
    } else {
        // redirect to the login page and display an error message
        header("Location: ../index.php?error=notloggedin");
        echo "<script>alert('The doctor is not logged in.');</script>";
    }
?>

<?php
    if(isset($_GET['update'])) {
        $updateId = $_GET['update']; 
    }
?>


<?php
    if (isset($_POST['submit'])) {
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

        $query = "UPDATE records SET 
                names='$name', gender='$gender', contactEmail='$contact', edad='$age', height='$height',
                weightlbs='$weight', phoneNumber='$phone', addresss='$address', allergies='$allergies', 
                medication='$medication', pastConditions='$conditions', contactPerson='$contactPerson', 
                contactPersonNumber='$contactPersonNumber', alak='$alcohol', presentConditions='$presentConditions' 
                WHERE record_id=$updateId";

        $result = mysqli_query($connect, $query);

        if ($result == true) {
            header("Location: ../pages/doctors.php?error=updated");
            exit();
        } else {
            header("Location: ../pages/doctors.php?error=error");
            exit();
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="icon" href="" type="image/x-icon" class="rounded-circle">
    <link rel="stylesheet" href="../Assets/css/doctorsUpdate.css">
    <title>CMM Doctors:update</title>
</head>
<body>
    <?php
        $dataQuery = "SELECT * FROM `records` WHERE `record_id` = $updateId";
        $doctor = mysqli_query($connect, $dataQuery);

        if (mysqli_num_rows($doctor) > 0){ 
            while ($fetch_doctor = mysqli_fetch_assoc($doctor)) {
    ?>
    <div class="update-container">
        <a href="doctors.php" class="back-button">Back</a>
        <div class="add-records-container" id="add-form">
            <form action="#" method="POST">
                <h1 style="margin-top: 20px;">Patient Details</h1><br>
                <div class="form-contain">
                    <div class="label-input">
                        <label for="name">Name</label>
                        <input value="<?php echo $fetch_doctor['names']; ?>" required type="text" name="name" placeholder="Firstname Lastname">
                    </div>
                    <div class="label-input">
                        <label for="gender">Gender</label>
                        <select required name="gender">
                            <option disabled>Choose Gender</option>
                            <option value="Male" <?php if ($fetch_doctor['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                            <option value="Female" <?php if ($fetch_doctor['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                        </select>
                    </div>
                    <div class="label-input">
                        <label for="contact">Contact Email</label>
                        <input value="<?php echo $fetch_doctor['contactEmail']; ?>" required type="email" name="contact" placeholder="example@gmail.com">
                    </div>
                </div><br>
                <div class="form-contain">
                    <div class="label-input">
                        <label for="age">Age</label>
                        <input value="<?php echo $fetch_doctor['edad']; ?>" required type="text" name="age" placeholder="Edad">
                    </div>
                    <div class="label-input">
                        <label for="height">Height-CM</label>
                        <input value="<?php echo $fetch_doctor['height']; ?>" required type="number" max="300" min="0" name="height" placeholder="CM">
                    </div>
                    <div class="label-input">
                        <label for="weight">Weight-LBS</label>
                        <input value="<?php echo $fetch_doctor['weightlbs']; ?>" required type="number" max="300" min="0" name="weight" placeholder="LBS">
                    </div>
                </div><br>
                <div class="form-contain">
                    <div class="label-input">
                        <label for="phone">Phone number</label>
                        <input value="<?php echo $fetch_doctor['phoneNumber']; ?>" required type="text" name="phone" placeholder="09123456789">
                    </div>
                    <div class="label-input" style="width: 66.5%;">
                        <label for="address">Address</label>
                        <input value="<?php echo $fetch_doctor['addresss']; ?>" required type="text" name="address" placeholder="# Street City">
                    </div>
                </div><br><br>
                <h1>Patient Medical Records</h1><br>
                <div class="form-contain">
                    <div class="label-input">
                        <label for="allergies">Allergies</label>
                        <input value="<?php echo $fetch_doctor['allergies']; ?>" required type="text" name="allergies" placeholder="Food / Drinks / Medicine">
                    </div>
                    <div class="label-input" style="width: 66.5%;">
                        <label for="medication">Patient recently medication taken or none</label>
                        <input value="<?php echo $fetch_doctor['medication']; ?>" required type="text" name="medication" placeholder="Biogesic, Paracetamol, Etc.">
                    </div>
                </div><br>
                <div class="form-contain">
                    <div class="label-input">
                        <label for="conditions">Past conditions</label>
                        <input value="<?php echo $fetch_doctor['pastConditions']; ?>" required type="text" name="conditions" placeholder="Covid-19">
                    </div>
                    <div class="label-input">
                        <label for="contactPerson">Contact Person</label>
                        <input value="<?php echo $fetch_doctor['contactPerson']; ?>" required type="text" name="contactPerson" placeholder="Relatives, Guardian, Parents">
                    </div>
                    <div class="label-input">
                        <label for="contactPersonNumber">Contact Person Number</label>
                        <input value="<?php echo $fetch_doctor['contactPersonNumber']; ?>" required type="text" name="contactPersonNumber" placeholder="09123456789">
                    </div>
                </div><br>
                <div class="form-contain">
                    <div class="label-input">
                        <label for="alcohol">Last taking alcohol (ALAK)</label>
                        <select required name="alcohol">
                            <option disabled>Choose days</option>
                            <option value="Non-drinker" <?php if ($fetch_doctor['alak'] == 'Non-drinker') echo 'selected'; ?>>Non-drinker</option>
                            <option value="1 day ago" <?php if ($fetch_doctor['alak'] == '1 day ago') echo 'selected'; ?>>1 day ago</option>
                            <option value="2 days ago" <?php if ($fetch_doctor['alak'] == '2 days ago') echo 'selected'; ?>>2 days ago</option>
                            <option value="3 days ago" <?php if ($fetch_doctor['alak'] == '3 days ago') echo 'selected'; ?>>3 days ago</option>
                            <option value="4 days ago" <?php if ($fetch_doctor['alak'] == '4 days ago') echo 'selected'; ?>>4 days ago</option>
                            <option value="5 days ago" <?php if ($fetch_doctor['alak'] == '5 days ago') echo 'selected'; ?>>5 days ago</option>
                            <option value="6 days ago" <?php if ($fetch_doctor['alak'] == '6 days ago') echo 'selected'; ?>>6 days ago</option>
                            <option value="7 days ago" <?php if ($fetch_doctor['alak'] == '7 days ago') echo 'selected'; ?>>7 days ago</option>
                        </select>
                    </div>
                    <div class="label-input" style="width: 66.5%;">
                        <label for="presentConditions">Present conditions</label>
                        <input value="<?php echo $fetch_doctor['presentConditions']; ?>" required type="text" name="presentConditions" placeholder="SARS VIRUS">
                    </div>
                </div><br>
                <button type="submit" name="submit" class="add-form-btn">Update</button>
            </form>
        </div>
    </div>   
    <?php 
        }
    }
    ?>
</body>
</html>