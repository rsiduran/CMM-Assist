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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/patient.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>CMM Patient</title>
</head>
<body>
    <nav>
        <div class="nav-sections">
            <div class="logo"><img src="../Assets/images/CMM LOGO.png" alt=""></div>
            <div class="account">
                <div class="account-dp"><i class='bx bxs-like' ></i></div>
                <div class="account-name">
                    <div class="top-name">Lorem Ipsum</div>
                    <div class="bottom-name">Temporary Account</div>
                </div>
            </div>
        </div>
        <div class="nav-sections">
            <a href="../backend/logout.php" class="nav-list"><i class='bx bx-log-out'></i>Logout</a>
            <a href="" class="nav-list"><i class='bx bxs-cog' ></i></a>
        </div>
    </nav>
    
    <main>
        <h1 class="header">Appointments <div class="line"> </div> <span>Home > Appointments</span></h1>
    </main>
</body>
</html>