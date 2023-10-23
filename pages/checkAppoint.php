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
    $gender = isset($_POST['gender']) ? $_POST['gender'] : ''; //if $gender == '' then nothing color change else color change in style property in my html
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/appointment.css">
    <link rel="stylesheet" href="../Assets/css/checkappoint.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
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
    <h1 class="textH1Details">Appointment Details</h1>
        <p class="textdetails">Below are the details of the appointment:</p>
    <div class="container-details">
        <div class="service-details">
            <h1>Services</h1>
            <p class="text-services">Specialty Consultations</p>
            <div class="specialty-consultations service-grid">
                <div class="service-content" style="">
                    <h2 class="text-center">Nephrology</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="">
                    <h2 class="text-center">Cardiology</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="">
                    <h2 class="text-center">Pulmonology</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="">
                    <h2 class="text-center">Urology</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="">
                    <h2 class="text-center">Orthopedics</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="">
                    <h2 class="text-center">Endocrinology</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="">
                    <h2 class="text-center">Neurology</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="">
                    <h2 class="text-center">Pediatrics</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
            </div>
            <p class="text-services">Laboratory Tests</p>
            <div class="laboratory-tests service-grid">

            </div>
            <p class="text-services">Imaging Tests</p>
            <div class="imaging-tests service-grid">

            </div>
        </div>
        <div class="personal-details">
            <h1>Information</h1>
        </div>
    </div>
</body>
</html>
