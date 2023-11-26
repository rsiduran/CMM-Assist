<?php
    session_start();
    include '../backend/config.php';

    if (isset($_SESSION["appointment_id"])) {
        
    } else {
        // redirect to the login page and display an error message
        header("Location: ../index.php?error=notloggedin");
        echo "<script>alert('The doctor is not logged in.');</script>";
    }
?>

<?php
    
    $patientAcc = $_SESSION["appointment_id"];
    $query = "SELECT * FROM appointments WHERE `appointment_id`='$patientAcc'";
    $result = mysqli_query($connect, $query);

    while ($row = mysqli_fetch_array($result)) {
        $name = $row["firstName"] . " " . $row["lastName"];
        $services = $row["services"];
        $date = $row["appointmentDate"];
        $time = $row["appointmentTime"];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/patient.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../Assets/css/popup.css">
    <title>CMM Patient</title>
</head>
<body>
    <?php
        if(isset($_GET['message'])) { 
        $message = $_GET['message']; 

            if($message === 'Passwords do not match.') { 
                echo '  <div id="pop-up-log-in">
                            <div class="pop-info-top" style="background-color: red; font-size: 72px;">&times;</div>
                                <div class="pop-info-center">
                                    <h1 style="font-size: 48px;">Error!</h1><br>
                                    <p>Your current password is wrong. Try Again!</p>
                                </div>
                            <div class="pop-info-bottom"><button class="pop-info-bottom-button" style="background-color: red;" onclick="popUpVanish()">Ok</button></div>
                        </div>  ';
            }
            else if($message === 'Password updated successfully') { 
                echo '  <div id="pop-up-log-in">
                            <div class="pop-info-top">&#10003;</div>
                                <div class="pop-info-center">
                                    <h1 style="font-size: 48px;">Thank You!</h1><br>
                                    <p>Your password has been changed. Thanks!</p>
                                </div>
                            <div class="pop-info-bottom"><button class="pop-info-bottom-button" onclick="popUpVanish()">Ok</button></div>
                        </div>  ';
            }
            else if($message === 'Failed to Update Password.') { 
                echo '  <div id="pop-up-log-in">
                            <div class="pop-info-top" style="background-color: red; font-size: 72px;">&times;</div>
                                <div class="pop-info-center">
                                    <h1 style="font-size: 48px;">Error!</h1><br>
                                    <p>Your password is failed to update. Try Again!</p>
                                </div>
                            <div class="pop-info-bottom"><button class="pop-info-bottom-button" style="background-color: red;" onclick="popUpVanish()">Ok</button></div>
                        </div>  ';
            }
        }
    ?>
    <nav>
        <div class="nav-sections">
            <a onclick="changeHome()" class="logo"><img src="../Assets/images/CMM LOGO.png" alt="CMM LOGO"></a>
            <div class="account">
                <div class="account-dp"><i class='bx bxs-like' ></i></div>
                <div class="account-name">
                    <div class="top-name"><?php echo $name; ?></div>
                    <div class="bottom-name">Temporary Account</div>
                </div>
            </div>
        </div>
        <div class="nav-sections">
            <a href="../backend/logout.php" class="nav-list"><i class='bx bx-log-out'></i>Logout</a>
            <a onclick="changePw()" class="nav-list"><i class='bx bxs-cog' ></i></a>
        </div>
    </nav>
    
    <main id="homeApt">
        <h1 id="header"class="header">Appointments <div class="line"> </div> <span>Home > Appointments</span></h1>
        <a href="../backend/changePW.php?deletePatient=<?php echo $patientAcc; ?>" onclick="return  confirm('Are you sure you want to cancel your appointment?')" class="cancelApt">Cancel Appointment</a>
        <div class="schedule-container">
            <div class="schedule-section">
                <div class="test">
                    <div class="test-icon"><i class='bx bx-notepad'></i></div>
                    <div class="test-text">
                        <p style="margin-top: -6px; font-size: 18px; font-weight:bold; text-transform: uppercase;">Test Details</p>
                        <p style="margin-top: -6px; font-size: 13px; opacity: 0.7; margin-left: 2px;"><?php echo $services; ?></p>
                    </div>
                </div>
                <div class="date">
                    <div class="date-text">
                        <div class="calendar"><?php echo $date; ?></div>
                        <div class="time"><?php echo $time; ?></div>
                    </div>
                    <div class="location">CMM Medical and Diagnostic Clinic is located at 510 A. Mabini St., Brgy. 13, Caloocan City</div>
                </div>
            </div>
            <div class="image-wellness">
                <img src="../Assets/images/Wellness.jpg" alt="Wellness">
            </div>
        </div>
        <br><br>
    </main>

    <main id="changePw" style="display: none;">
        <h1 id="header"class="header">Appointments <div class="line"> </div> <span>Settings > Change password</span></h1>
            <div class="password-container" id="pw-container">
                <img class="pw-img" src="../Assets/images/CMM LOGO.png" alt="cmm logo">
                <p style="font-weight: bold; font-size: 20px;">Users Name <span style="font-size: 30px;">.</span> CMM</p>
                <form method="POST" action="../backend/changePW.php?patientPW=<?php echo $patientAcc; ?>">
                    <h4>Change Password</h4>
                    <p>your password must be atleast six characters and should include a combination of numbers</p>
                    <input name="current-pw" type="password" placeholder="Current Password">
                    <input name="new-pw" type="password" placeholder="New Password">
                    <input name="retype-new-pw" type="password" placeholder="Retype New Password">
                    <p style="text-align: end; color: blue; font-size: 14px; text-decoration: underline; margin-top: 1px;">Forgot Password</p>
                    <button type="submit">Change Password</button>
                </form>
            </div>
        <br><br>
    </main>

    <script>
        let changeFE = document.getElementById('changePw')
        let home = document.getElementById('homeApt')
        let pwcontainer = document.getElementById('pw-container')
        let header2 = document.getElementById('header2')
        function changePw() {
            home.style.display = "none"
            changeFE.style = "block"
            pwcontainer.style.display = "block"
        }

        function changeHome() {
            home.style.display = "block"
            changeFE.style.display = "none"
            pwcontainer.style.display = "none"
        }

        function popUpVanish() {
            const popup = document.getElementById("pop-up-log-in")
            if(popup) {
                popup.style.display = 'none';
            }
        }
    </script>

</body>
</html>