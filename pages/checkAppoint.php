<?php
    // services //Specialty Consultation
    $Nephrology = isset($_POST['Nephrology']) ? $_POST['Nephrology'] : '';
    $Cardiology = isset($_POST['Cardiology']) ? $_POST['Cardiology'] : '';
    $Pulmonology = isset($_POST['Pulmonology']) ? $_POST['Pulmonology'] : '';
    $Urology = isset($_POST['Urology']) ? $_POST['Urology'] : '';
    $Orthopedics = isset($_POST['Orthopedics']) ? $_POST['Orthopedics'] : '';
    $Endocrinology = isset($_POST['Endocrinology']) ? $_POST['Endocrinology'] : '';
    $Neurology = isset($_POST['Neurology']) ? $_POST['Neurology'] : '';
    $Pediatrics = isset($_POST['Pediatrics']) ? $_POST['Pediatrics'] : '';

    // Use implode to join the values with a comma
    $specialty = implode(', ', array_filter([$Nephrology, $Cardiology, $Pulmonology, $Urology, $Orthopedics, $Endocrinology, $Neurology, $Pediatrics]));

    $Blood = isset($_POST['Blood']) ? $_POST['Blood'] : '';
    $Antigen = isset($_POST['Antigen']) ? $_POST['Antigen'] : '';
    $Mircrobial = isset($_POST['Mircrobial']) ? $_POST['Mircrobial'] : '';
    $Semen = isset($_POST['Semen']) ? $_POST['Semen'] : '';
    $Stool = isset($_POST['Stool']) ? $_POST['Stool'] : '';
    $Urine = isset($_POST['Urine']) ? $_POST['Urine'] : '';
    $RT = isset($_POST['RT']) ? $_POST['RT'] : '';
    $ECG = isset($_POST['ECG']) ? $_POST['ECG'] : '';

    // Use implode to join the values with a comma
    $laboratory = implode(', ', array_filter([$Blood, $Antigen, $Mircrobial, $Semen, $Stool, $Urine, $RT, $ECG]));

    $Xray = isset($_POST['X-Ray']) ? $_POST['X-Ray'] : '';
    $General = isset($_POST['General']) ? $_POST['General'] : '';
    $OB = isset($_POST['OB']) ? $_POST['OB'] : '';
    $CT = isset($_POST['CT']) ? $_POST['CT'] : '';
    $MRI = isset($_POST['MRI']) ? $_POST['MRI'] : '';

    // Use implode to join the values with a comma
    $imaging = implode(', ', array_filter([$Xray, $General, $OB, $CT, $MRI]));

    $datetime = isset($_POST['datetime']) ? $_POST['datetime'] : '';

    // Personal details
    $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
    $middleName = isset($_POST['middleName']) ? $_POST['middleName'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    $contactNumber = isset($_POST['contactNumber']) ? $_POST['contactNumber'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/appointment.css">
    <link rel="stylesheet" href="../Assets/css/calendarStyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <style>
        h1 {
            text-align: center;
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .container {
            background-color: #fff;
            max-width: 60%;
            margin: 20px auto;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 2px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
        }

        .label {
            font-weight: bold;
        }

        .appointment-details {
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
        }
    </style>
    <title>CMM Assist Appointment</title>
</head>
<body>
    <header>
        <div class="left-header">
            <a href="../index.php" class="bold">Home</a>
            <span class="lineY"></span>
            <p class="light">Appointment Form</p>
        </div>
        <div class="right-header">
            <img class="cmm-logo" src="../Assets/images/CMM LOGO.png" alt="CMM logo">
        </div>
    </header>
    <div class="container">
        <h1>Appointment Details</h1>
        <p>Below are the details of the appointment:</p>

        <div class="appointment-details">
            <p class="label">Specialty Consultations:</p>
            <p><?php echo $specialty; ?></p>

            <p class="label">Laboratory Tests:</p>
            <p><?php echo $laboratory; ?></p>

            <p class="label">Imaging:</p>
            <p><?php echo $imaging; ?></p>

            <p class="label">Date and Time of Appointment:</p>
            <p><?php echo $datetime; ?></p>

            <p class="label">First Name:</p>
            <p><?php echo $firstName; ?></p>

            <p class="label">Last Name:</p>
            <p><?php echo $lastName; ?></p>

            <p class="label">Middle Name:</p>
            <p><?php echo $middleName; ?></p>

            <p class="label">Email:</p>
            <p><?php echo $email; ?></p>

            <p class="label">Date of Birth:</p>
            <p><?php echo $dob; ?></p>

            <p class="label">Contact Number:</p>
            <p><?php echo $contactNumber; ?></p>

            <p class="label">Gender:</p>
            <p><?php echo $gender; ?></p>
        </div>
    </div>
</body>
</html>
