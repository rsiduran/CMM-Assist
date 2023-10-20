<?php 
session_start();
include '../backend/config.php';

if (isset($_SESSION["admin_id"])) {
    echo "<script>alert('Welcome to Admin Dashboard!');</script>";
} else {
    // redirect to the login page and display an error message
    header("Location: ../index.html");
    echo "<script>alert('The admin is not logged in.');</script>";
}

if(isset($_POST['search'])) {
    $search = $_POST['search1'];
    $search = mysqli_real_escape_string($connect, $search);
} else {
    $search = isset($_SESSION['search1']) ? $_SESSION['search1']: "";
 } 

 $query = "SELECT * FROM `inquiry` WHERE name LIKE '%$search%'";
 $select_search = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="icon" href="" type="image/x-icon" class="rounded-circle">
    <title>CMM Admin</title>
</head>

<body>

    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxs-heart'></i>
            <span class="logo_name" style="white-space: nowrap;">Healer</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" onclick="showSection('dashboard')">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#" onclick="showSection('dashboard')">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <a href="#" onclick="showSection('accounts')">
                    <i class="bx bxs-group"></i>
                    <span class="link_name" style="white-space: nowrap;">Accounts</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#" onclick="showSection('accounts')">Accounts</a></li>
                </ul>
            </li>
            <li>
                <a href="#" onclick="showSection('forms')">
                    <i class='bx bx-notepad'></i>
                    <span class="link_name" style="white-space: nowrap;">Form</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#" onclick="showSection('forms')">Form</a></li>
                </ul>
            </li>
            <li>
                <a href="#" onclick="showSection('messages')">
                    <i class='bx bxs-message'></i>
                    <span class="link_name" style="white-space: nowrap;">Messages</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#" onclick="showSection('messages')">Messages</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#" onclick="showSection('settings')">
                        <i class='bx bxs-cog'></i>
                        <span class="link_name">Settings</span>
                    </a>
                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#" onclick="showSection('settings')">Settings</a></li>
                    <li><a href="#" onclick="showSection('settings')">Change password</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <!--<img src="image/profile.jpg" alt="profileImg">-->
                    </div>
                    <div class="name-job">
                        <div class="profile_name" style="white-space: nowrap;">CMM Assist</div>
                        <div class="job">Admin</div>
                    </div>
                    <a href="../backend/logout.php"><i class="bx bx-log-out"></i></a>
                </div>
            </li>
        </ul>
    </div>

    <main class="home-section">
        <div class="home-content">
            <i class="bx bx-menu"></i>
        </div>
        <div class="container-fluid">
            <!-- Dashboard -->
            <section id="dashboard" class="section-padding">
                <div class="container">
                    <h1 class="header">Dashboard</h1>
                    <div class="line"></div>
                    <div class="dashboard-top">
                        <div class="dashboard-item">
                            <div class="dashboard-left blue"><i class='bx bxs-user-detail'></i></i></div>
                            <div class="dashboard-right">
                                <div class="dashboard-top-text">Appointments</div>
                                <div class="dashboard-bottom-text">108</div>
                            </div>
                        </div>
                        <div class="dashboard-item">
                            <div class="dashboard-left green"><i class='bx bxs-group'></i></div>
                            <div class="dashboard-right">
                                <div class="dashboard-top-text">Total Doctors</div>
                                <div class="dashboard-bottom-text">13</div>
                            </div>
                        </div>
                        <div class="dashboard-item">
                            <div class="dashboard-left pink"><i class='bx bxs-user'></i></i></div>
                            <div class="dashboard-right">
                                <div class="dashboard-top-text">Total Nurses</div>
                                <div class="dashboard-bottom-text">27</div>
                            </div>
                        </div>
                        <div class="dashboard-item">
                            <div class="dashboard-left yellow"><i class='bx bx-plus-medical'></i></div>
                            <div class="dashboard-right">
                                <div class="dashboard-top-text">Medicine Staff</div>
                                <div class="dashboard-bottom-text">16</div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-bottom">
                        <main class="table">
                            <article class="table__header">
                                <h1>Recent Appointment</h1>
                                <form action="" class="input-group">
                                    <input type="search" placeholder="Search Data...">
                                    <img src="../Assets/images/search.png" alt="">
                                </form>
                            </article>
                            <article class="table__body">
                                <table>
                                    <thead>
                                        <tr>
                                            <th> NO. <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Patient Name <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Appointment Date <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Identification Card <span class="icon-arrow">&UpArrow;</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td> 05 Sep, 2023 </td>
                                            <td>
                                                <p class="status delivered">Finished</p>
                                            </td>
                                            <td> <img src="images/Zinzu Chan Lee.jpg" alt="ID"></td>
                                        </tr>
                                        <tr>
                                            <td> 2 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td> 05 Sep, 2023 </td>
                                            <td>
                                                <p class="status delivered">Finished</p>
                                            </td>
                                            <td> <img src="images/Zinzu Chan Lee.jpg" alt="ID"></td>
                                        </tr>
                                        <tr>
                                            <td> 3 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td> 05 Sep, 2023 </td>
                                            <td>
                                                <p class="status delivered">Finished</p>
                                            </td>
                                            <td> <img src="images/Zinzu Chan Lee.jpg" alt="ID"></td>
                                        </tr>
                                        <tr>
                                            <td> 4 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td> 05 Sep, 2023 </td>
                                            <td>
                                                <p class="status delivered">Finished</p>
                                            </td>
                                            <td> <img src="images/Zinzu Chan Lee.jpg" alt="ID"></td>
                                        </tr>
                                        <tr>
                                            <td> 5 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td> 05 Sep, 2023 </td>
                                            <td>
                                                <p class="status delivered">Finished</p>
                                            </td>
                                            <td> <img src="images/Zinzu Chan Lee.jpg" alt="ID"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </article>
                        </main>
                    </div>
                </div>

            </section>
            <!-- Accounts  -->
            <section id="accounts" class="section-padding">
                <div class="container">
                    <h1 class="header">Accounts</h1>
                    <div class="line"></div>
                    <div class="dashboard-bottom">
                        <main class="table">
                            <article class="table__header">
                                <h1>Doctors</h1>
                                <form action="" class="input-group">
                                    <input type="search" placeholder="Search Data...">
                                    <img src="../Assets/images/search.png" alt="">
                                </form>
                            </article>
                            <article class="table__body">
                                <table>
                                    <thead>
                                        <tr>
                                            <th> ID <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Account Created <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Username <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Contact <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Actions <span class="icon-arrow">&UpArrow;</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> 09 Sep, 2023 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Lorem </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td style="white-space: nowrap;">
                                                <a href="#" class="btn-action">Reset Account</a>
                                                <!-- whatever password u have it will be 123 -->
                                                <a href="#" class="btn-action">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 1 </td>
                                            <td> 09 Sep, 2023 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Lorem </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td style="white-space: nowrap;">
                                                <a href="#" class="btn-action">Reset Account</a>
                                                <!-- whatever password u have it will be 123 -->
                                                <a href="#" class="btn-action">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 1 </td>
                                            <td> 09 Sep, 2023 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Lorem </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td style="white-space: nowrap;">
                                                <a href="#" class="btn-action">Reset Account</a>
                                                <!-- whatever password u have it will be 123 -->
                                                <a href="#" class="btn-action">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 1 </td>
                                            <td> 09 Sep, 2023 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Lorem </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td style="white-space: nowrap;">
                                                <a href="#" class="btn-action">Reset Account</a>
                                                <!-- whatever password u have it will be 123 -->
                                                <a href="#" class="btn-action">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 1 </td>
                                            <td> 09 Sep, 2023 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Lorem </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td style="white-space: nowrap;">
                                                <a href="#" class="btn-action">Reset Account</a>
                                                <!-- whatever password u have it will be 123 -->
                                                <a href="#" class="btn-action">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </article>
                        </main>
                    </div>
                    <div class="dashboard-bottom">
                        <main class="table">
                            <article class="table__header">
                                <h1>Nurses</h1>
                                <form action="" class="input-group">
                                    <input type="search" placeholder="Search Data...">
                                    <img src="../Assets/images/search.png" alt="">
                                </form>
                            </article>
                            <article class="table__body">
                                <table>
                                    <thead>
                                        <tr>
                                            <th> ID <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Account Created <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Username <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Contact <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Actions <span class="icon-arrow">&UpArrow;</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> 09 Sep, 2023 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Lorem </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td style="white-space: nowrap;">
                                                <a href="#" class="btn-action">Reset Account</a>
                                                <!-- whatever password u have it will be 123 -->
                                                <a href="#" class="btn-action">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 1 </td>
                                            <td> 09 Sep, 2023 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Lorem </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td style="white-space: nowrap;">
                                                <a href="#" class="btn-action">Reset Account</a>
                                                <!-- whatever password u have it will be 123 -->
                                                <a href="#" class="btn-action">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 1 </td>
                                            <td> 09 Sep, 2023 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Lorem </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td style="white-space: nowrap;">
                                                <a href="#" class="btn-action">Reset Account</a>
                                                <!-- whatever password u have it will be 123 -->
                                                <a href="#" class="btn-action">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 1 </td>
                                            <td> 09 Sep, 2023 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Lorem </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td style="white-space: nowrap;">
                                                <a href="#" class="btn-action">Reset Account</a>
                                                <!-- whatever password u have it will be 123 -->
                                                <a href="#" class="btn-action">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 1 </td>
                                            <td> 09 Sep, 2023 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Lorem </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td style="white-space: nowrap;">
                                                <a href="#" class="btn-action">Reset Account</a>
                                                <!-- whatever password u have it will be 123 -->
                                                <a href="#" class="btn-action">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </article>
                        </main>
                    </div>
                    <div class="dashboard-bottom">
                        <main class="table">
                            <article class="table__header">
                                <h1>Medicine Staff</h1>
                                <form action="" class="input-group">
                                    <input type="search" placeholder="Search Data...">
                                    <img src="../Assets/images/search.png" alt="">
                                </form>
                            </article>
                            <article class="table__body">
                                <table>
                                    <thead>
                                        <tr>
                                            <th> ID <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Account Created <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Username <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Contact <span class="icon-arrow">&UpArrow;</span></th>
                                            <th> Actions <span class="icon-arrow">&UpArrow;</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 1 </td>
                                            <td> 09 Sep, 2023 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Lorem </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td style="white-space: nowrap;">
                                                <a href="#" class="btn-action">Reset Account</a>
                                                <!-- whatever password u have it will be 123 -->
                                                <a href="#" class="btn-action">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 1 </td>
                                            <td> 09 Sep, 2023 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Lorem </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td style="white-space: nowrap;">
                                                <a href="#" class="btn-action">Reset Account</a>
                                                <!-- whatever password u have it will be 123 -->
                                                <a href="#" class="btn-action">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 1 </td>
                                            <td> 09 Sep, 2023 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Lorem </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td style="white-space: nowrap;">
                                                <a href="#" class="btn-action">Reset Account</a>
                                                <!-- whatever password u have it will be 123 -->
                                                <a href="#" class="btn-action">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 1 </td>
                                            <td> 09 Sep, 2023 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Lorem </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td style="white-space: nowrap;">
                                                <a href="#" class="btn-action">Reset Account</a>
                                                <!-- whatever password u have it will be 123 -->
                                                <a href="#" class="btn-action">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> 1 </td>
                                            <td> 09 Sep, 2023 </td>
                                            <td> Lorem Ipsum </td>
                                            <td> Lorem </td>
                                            <td> Thisemail@gmail.com </td>
                                            <td style="white-space: nowrap;">
                                                <a href="#" class="btn-action">Reset Account</a>
                                                <!-- whatever password u have it will be 123 -->
                                                <a href="#" class="btn-action">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </article>
                        </main>
                    </div>
                </div>
            </section>
            <!-- form  -->
            <section id="forms" class="section-padding">
                <div class="container">
                    <h1 class="header">Form</h1>
                    <div class="line"></div>
                    <div class="form-main">
                        <div class="left-form">
                            <div class="left-top">
                                <h1>All in one workspace</h1>
                                <h2 style="font-size: 20px;margin-top: -2px;">Healthcare CMM Assist</h2>
                                <p style="margin-top: 15px;">Join our healthcare community by signing up today and
                                    become part of a dedicated team of medical professionals making a difference in
                                    patient care.</p>
                            </div>
                            <div class="left-bottom">
                                <img class="left-bottom-img" src="../Assets/images/sign-up-bg.avif" alt="">
                            </div>
                        </div>
                        <div class="right-form">
                            <form action="../backend/doctorAcc.php" method="POST">
                                <div class="form-group">
                                    <label class="label-field" for="fname">First Name</label>
                                    <input class="input-field" placeholder="First Name:" type="text" name="fname" id="fname" required>
                                </div>
                                <div class="form-group">
                                    <label class="label-field" for="lname">Last Name</label>
                                    <input class="input-field" placeholder="Last Name:" type="text" name="lname" id="lname" required>
                                </div>
                                <div class="form-group">
                                    <label class="label-field" for="uname">Username</label>
                                    <input class="input-field" placeholder="Username:" type="text" name="uname" id="uname" required>
                                </div>
                                <div class="form-group">
                                    <label class="label-field" for="pword">Password</label>
                                    <input class="input-field" placeholder="Password:" type="password" name="pword" id="pword" required>
                                </div>
                                <div class="form-group">
                                    <label class="label-field" for="email">Email</label>
                                    <input class="input-field" placeholder="Email:" type="email" name="email" id="email" required>
                                </div>
                                <div class="form-group">
                                    <label class="label-field" for="occupation">Occupation</label>
                                    <select class="input-field" name="occupation" id="occupation" required>
                                        <option value="doctor">Doctor</option>
                                        <option value="nurse">Nurse</option>
                                        <option value="medical_staff">Medical Staff</option>
                                    </select>
                                    <div class="form-group">
                                        <button type="submit" id="submit" class="submit-button">Create Account</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- messages  -->
            <section id="messages" class="section-padding">
                <div class="container" style="padding-bottom: 30px;">
                    <h1 class="header">Messages</h1>
                    <div class="line" style="margin-bottom: 20px;"></div>
                    <main class="table">
                        <article class="table__header">
                            <h1>Contact Messages</h1>
                            <form action="" class="input-group">
                                <input type="search" name="search1" placeholder="Search Data...">
                                
                                <img src="../Assets/images/search.png" alt="" type="submit" name="search">
                            </form>
                        </article>
                        <article class="table__body">
                        <?php
                            if (mysqli_num_rows($select_search) > 0){
                        ?>
                            <table>
                                <thead>
                                    <tr>
                                        <th> Message Sent <span class="icon-arrow">&UpArrow;</span></th>
                                        <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                                        <th> Contact <span class="icon-arrow">&UpArrow;</span></th>
                                        <th> Message <span class="icon-arrow">&UpArrow;</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    while ($fetch = mysqli_fetch_assoc($select_search)){
                                ?>
                                    <tr>
                                        <td><?php echo $fetch['datestamp']; ?></td>
                                        <td><?php echo $fetch['name']; ?></td>
                                        <td><?php echo $fetch['email']; ?></td>
                                        <td><?php echo $fetch['message']; ?></td>
                                    </tr>
                                    <?php 
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <?php
                                } else {        
                            ?>
                            <table>
                                <thead>
                                    <tr>
                                        <th> Message Sent <span class="icon-arrow">&UpArrow;</span></th>
                                        <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                                        <th> Contact <span class="icon-arrow">&UpArrow;</span></th>
                                        <th> Message <span class="icon-arrow">&UpArrow;</span></th>
                                    </tr>
                                </thead>
                                    <tbody>
                                    </tbody>
                            </table>
                                <p>No results found</p>
                            <?php
                                }
                            ?>
                        </article>
                    </main>
                </div>
            </section>
            <!-- settings  -->
            <section id="settings" class="section-padding">
                <div class="container">
                    <h1 class="header">Settings</h1>
                    <div class="line"></div>
                    <div class="form-main">
                        <div class="left-form" style="background: #00D47D;">
                            <div class="left-bottom">
                                <img class="left-bottom-img" src="../Assets/images/security.png" alt="">
                            </div>
                        </div>
                        <div class="right-form">
                            <form action="">
                                <div class="form-group">
                                    <label class="label-field" for="admin">Admin Account</label>
                                    <input disabled class="input-field" type="text" name="admin" id="" value="Admin">
                                </div>
                                <div class="form-group">
                                    <label class="label-field" for="cmm">CMM Assist</label>
                                    <input disabled class="input-field" type="text" name="cmm" id="" value="CMM Assist">
                                </div>
                                <div class="form-group">
                                    <label class="label-field" for="current-pass">Current password</label>
                                    <input class="input-field" type="password" name="current-pass" id="">
                                </div>
                                <div class="form-group">
                                    <label class="label-field" for="new-pass">New password</label>
                                    <input class="input-field" type="password" name="new-pass" id="">
                                </div>
                                <div class="form-group">
                                    <label class="label-field" for="retype-pass">Retype new password</label>
                                    <input class="input-field" type="password" name="retype-pass" id="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="submit-button">Change Password</button>
                                </div>      
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script src="../Assets/js/admin.js"></script>
</body>


</html>