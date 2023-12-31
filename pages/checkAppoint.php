<?php
    include '../backend/config.php';
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
    $laboratory = implode(', ', array_filter([$Blood, $Antigen, $Mircrobial, $Semen, $Stool, $Urine, $RT, $ECG])); // can be deleted or minimize the code

    $Xray = isset($_POST['X-Ray']) ? $_POST['X-Ray'] : '';
    $General = isset($_POST['General']) ? $_POST['General'] : '';
    $OB = isset($_POST['OB']) ? $_POST['OB'] : '';
    $CT = isset($_POST['CT']) ? $_POST['CT'] : '';
    $MRI = isset($_POST['MRI']) ? $_POST['MRI'] : '';

    // Use implode to join the values with a comma
    $imaging = implode(', ', array_filter([$Xray, $General, $OB, $CT, $MRI]));

    $appointmentDate = isset($_POST['appointmentDate']) ? $_POST['appointmentDate'] : '';
    $appointmentTime = isset($_POST['appointmentTime']) ? $_POST['appointmentTime'] : ''; 

    // Personal details
    $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
    $middleName = isset($_POST['middleName']) ? $_POST['middleName'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    $contactNumber = isset($_POST['contactNumber']) ? $_POST['contactNumber'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : ''; 
    

    $img_name = $_FILES['identification']['name'];
    $img_size = $_FILES['identification']['size'];
    $tmp_name = $_FILES['identification']['tmp_name'];
    $error = $_FILES['identification']['error'];
    
    if ($error === 0) {
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg", "jpeg", "png");
    
        if (in_array($img_ex_lc, $allowed_exs)) {
            if ($img_size <= 1250000) {
                $new_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_name;
                move_uploaded_file($tmp_name, $img_upload_path);
            } else {
                $em = "<script>alert('Your file is too large.')</script>";
                header("Location: appointmentForm.php?error=$em");
            }
        } else {
            $em = "<script>alert('Only JPG, JPEG, and PNG files are allowed.')</script>";
            header("Location: appointmentForm.php?error=$em");
        }
    } else {
        $em = "<script>alert('Unknown error occurred!')</script>";
        header("Location: appointmentForm.php?error=$em");
    }
    
    $services = array();
    if (!empty($Nephrology)) { $services[] = $Nephrology; } if (!empty($Cardiology)) { $services[] = $Cardiology; } if (!empty($Pulmonology)) { $services[] = $Pulmonology; } if (!empty($Urology)) { $services[] = $Urology; } if (!empty($Orthopedics)) { $services[] = $Orthopedics; } if (!empty($Endocrinology)) { $services[] = $Endocrinology; } if (!empty($Neurology)) { $services[] = $Neurology; } if (!empty($Pediatrics)) { $services[] = $Pediatrics;  } if (!empty($Blood)) { $services[] = $Blood; } if (!empty($Antigen)) { $services[] = $Antigen; } if (!empty($Mircrobial)) { $services[] = $Mircrobial; } if (!empty($Semen)) { $services[] = $Semen; } if (!empty($Stool)) { $services[] = $Stool; } if (!empty($Urine)) { $services[] = $Urine; } if (!empty($RT)) { $services[] = $RT; } if (!empty($ECG)) { $services[] = $ECG; } if (!empty($Xray)) { $services[] = $Xray; } if (!empty($General)) { $services[] = $General; } if (!empty($OB)) { $services[] = $OB; } if (!empty($CT)) { $services[] = $CT; } if (!empty($MRI)) { $services[] = $MRI; }

    if (isset($_POST['confirm-btn'])) {
        $firstName = mysqli_real_escape_string($connect, $_POST["firstName"]);
        $lastName = mysqli_real_escape_string($connect, $_POST["lastName"]);
        $middleName = mysqli_real_escape_string($connect, $_POST["middleName"]);
        $email = mysqli_real_escape_string($connect, $_POST["email"]);
        $dob = mysqli_real_escape_string($connect, $_POST["dob"]);
        $contactNumber = mysqli_real_escape_string($connect, $_POST["contactNumber"]);
        $gender = mysqli_real_escape_string($connect, $_POST["gender"]);
        $appointmentDate = mysqli_real_escape_string($connect, $_POST["appointmentDate"]);
        $appointmentTime = mysqli_real_escape_string($connect, $_POST["appointmentTime"]);
        $new_name = mysqli_real_escape_string($connect, $_POST["identification"]);

        $services = isset($_POST['services']) ? $_POST['services'] : [];
        $services = array_filter($services);
        $service = implode(', ', $services);
        
            $query = "INSERT INTO appointments (firstName, lastName, middleName, email, dob, contactNumber, gender, id, services, appointmentDate, appointmentTime) VALUES (' $firstName', 
            '$lastName', '$middleName', '$email', ' $dob', ' $contactNumber', '$gender', '$new_name', '$service', '$appointmentDate', '$appointmentTime')";
            $stmt = mysqli_prepare($connect, $query);
            
            if($stmt) {
                
            }
            if(mysqli_query($connect, $query)) {
                header("Location: ../index.php?message=Successfully Appointed.");
            } else {
                echo '<script>alert("Not added!")</script>'; 
            }
        
    }
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
            <div class="circle-container">
                <div class="circle"></div>
                <div class="circle-value">Selected Services</div>
            </div>
            <div class="specialty-consultations service-grid">
                <div class="service-content" style="<?php if (!empty($Nephrology)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">Nephrology</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($Cardiology)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">Cardiology</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($Pulmonology)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">Pulmonology</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($Urology)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">Urology</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($Orthopedics)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">Orthopedics</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($Endocrinology)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">Endocrinology</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($Neurology)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">Neurology</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($Pediatrics)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">Pediatrics</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
            </div>
            <p class="text-services">Laboratory Tests</p>
            <div class="laboratory-tests service-grid">
                <div class="service-content" style="<?php if (!empty($Blood)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">Blood Test</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($Antigen)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">Antigen</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($Mircrobial)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">Mircrobial Test</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($Semen)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">Semen Test</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($Stool)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">Stool Test</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($Urine)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">Urine Test</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($RT)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">RT-PCR Test</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($ECG)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">ECG</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
            </div>
            <p class="text-services">Imaging Tests</p>
            <div class="imaging-tests service-grid">
                <div class="service-content" style="<?php if (!empty($Xray)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">X-Ray</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($General)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">Gen. Ultrasound</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($OB)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">OB Ultrasound</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($CT)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">CT Scan</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
                <div class="service-content" style="<?php if (!empty($MRI)) { echo 'background-color: #30b830cc;';} ?>">
                    <h2 class="text-center">MRI Option</h2>
                    <p class="text-center">1 Hour</p>
                    <i class='bx bxs-error-alt icon-right'></i>
                </div>
            </div>
        </div> <br>
        <div class="personal-details">
            <h1>Information</h1>
            <div class="personal-details-container">
                <div class="personal-content">
                    <p class="personal-text">Date & Time Appointed</p>
                    <div class="date-value personal-text"><?php echo $appointmentDate . ", " . $appointmentTime; ?></div>
                </div>
                <div class="personal-content personal-content-2">
                    <div class="personal-content-child">
                        <p class="personal-text">Full Name:</p>
                        <p class="personal-text">Email:</p>
                        <p class="personal-text">Date of Birth:</p>
                        <p class="personal-text">Contact Number:</p>
                        <p class="personal-text">Gender:</p>
                    </div>
                    <div class="personal-content-child personal-text">
                        <p><?php echo $firstName . " " . $middleName . " " . $lastName;?></p>
                        <p><?php echo $email;?></p>
                        <p><?php echo $dob;?></p>
                        <p><?php echo $contactNumber;?></p>
                        <p><?php echo $gender;?></p>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
        <div class="identification-details">
            <h1>Identification Information</h1>
            <div class="upload-image-container">
                <img class="upload-img" src="uploads/<?php echo $new_name; ?>" alt="Identification Card">
            </div>
        </div>

        <form method="post">
            <input style="display: none;" type="text" name="services[]" value="<?php echo $Nephrology ?>">
            <input style="display: none;" type="text" name="services[]" value="<?php echo $Cardiology ?>"> 
            <input style="display: none;" type="text" name="services[]" value="<?php echo $Pulmonology ?>"> 
            <input style="display: none;" type="text" name="services[]" value="<?php echo $Urology ?>">
            <input style="display: none;" type="text" name="services[]" value="<?php echo $Orthopedics ?>">
            <input style="display: none;" type="text" name="services[]" value="<?php echo $Endocrinology ?>">
            <input style="display: none;" type="text" name="services[]" value="<?php echo $Neurology ?>">
            <input style="display: none;" type="text" name="services[]" value="<?php echo $Pediatrics ?>">
            <input style="display: none;" type="text" name="services[]" value="<?php echo $Blood ?>">
            <input style="display: none;" type="text" name="services[]" value="<?php echo $Antigen ?>">
            <input style="display: none;" type="text" name="services[]" value="<?php echo $Mircrobial ?>"> 
            <input style="display: none;" type="text" name="services[]" value="<?php echo $Semen ?>"> 
            <input style="display: none;" type="text" name="services[]" value="<?php echo $Stool ?>"> 
            <input style="display: none;" type="text" name="services[]" value="<?php echo $Urine ?>"> 
            <input style="display: none;" type="text" name="services[]" value="<?php echo $RT ?>">
            <input style="display: none;" type="text" name="services[]" value="<?php echo $ECG ?>">
            <input style="display: none;" type="text" name="services[]" value="<?php echo $Xray ?>"> 
            <input style="display: none;" type="text" name="services[]" value="<?php echo $General ?>"> 
            <input style="display: none;" type="text" name="services[]" value="<?php echo $OB ?>"> 
            <input style="display: none;" type="text" name="services[]" value="<?php echo $CT ?>"> 
            <input style="display: none;" type="text" name="services[]" value="<?php echo $MRI ?>"> 
            <input style="display: none;" type="text" name="appointmentDate" value="<?php echo $appointmentDate ?>">
            <input style="display: none;" type="text" name="appointmentTime" value="<?php echo $appointmentTime ?>">
            <input style="display: none;" type="text" name="firstName" value="<?php echo $firstName ?>">
            <input style="display: none;" type="text" name="email" value="<?php echo $email ?>">
            <input style="display: none;" type="text" name="dob" value="<?php echo $dob ?>">
            <input style="display: none;" type="text" name="lastName" value="<?php echo $lastName ?>">   
            <input style="display: none;" type="text" name="contactNumber" value="<?php echo $contactNumber ?>">
            <input style="display: none;" type="text" name="middleName" value="<?php echo $middleName ?>">
            <input style="display: none;" type="text" name="gender" value="<?php echo $gender ?>">
            <input style="display: none;" type="text" name="identification" value="<?php echo $new_name ?>" >
            <button class="confirm-btn" type="submit" name="confirm-btn">Confirm Appointment</button>
        </form>
        <br><br>
    </div>
    <br>
    <br>
</body>

<script>
</script>
</html>