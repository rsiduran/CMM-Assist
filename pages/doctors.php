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
    $doctorAccount = $_SESSION["doctor_username"];
    $query = "SELECT * FROM doctor_acc WHERE `doctor_username`='$doctorAccount'";
    $result = mysqli_query($connect, $query);

    while ($row = mysqli_fetch_array($result)) {
        $docName = $row["doctor_firstname"] . ' ' . $row["doctor_lastname"];
        $doc = $row["doctor_firstname"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/account.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="icon" href="" type="image/x-icon" class="rounded-circle">
    <link rel="stylesheet" href="../Assets/css/popup.css">
    <link rel="stylesheet" href="../Assets/css/doctors.css">
    <title>CMM Doctors</title>
</head>
<body>
    <?php // in this code its checking whether an error occured after getting it 
        if(isset($_GET['error'])) { // it has two purpose 1 for sign in and 1 for sign up
        $error = $_GET['error']; 
        if($error === 'successlogin') {  // if the error statement is equal to none it would create account
            echo '  <div id="pop-up-log-in">
                        <div class="pop-info-top">&#10003;</div>
                        <div class="pop-info-center">
                            <h1>Welcome Back!</h1>
                            <p>You have been successfully logged in '. $doc .'.</p>
                        </div>
                        <div class="pop-info-bottom"><button class="pop-info-bottom-button" onclick="popUpVanish()">Ok</button></div>
                    </div>  ';
        }
        else if($error === 'none') { 
            echo '  <div id="pop-up-log-in">
                        <div class="pop-info-top">&#10003;</div>
                        <div class="pop-info-center">
                            <h1>Submitted</h1>
                            <p>New record has been saved. Thanks! '. $doc .'.</p>
                        </div>
                        <div class="pop-info-bottom"><button class="pop-info-bottom-button" onclick="popUpVanish()">Ok</button></div>
                    </div>  ';
        } else if($error === 'error') { 
            echo '  <div id="pop-up-log-in">
                        <div class="pop-info-top" style="background-color: red; font-size: 72px;">&times;</div>
                        <div class="pop-info-center">
                            <h1>ERROR!!!</h1>
                            <p>Records Didnt saved. Try Again! '. $doc .'.</p>
                        </div>
                        <div class="pop-info-bottom"><button class="pop-info-bottom-button" style="background-color: red;" onclick="popUpVanish()">Ok</button></div>
                    </div>  ';
        } else if($error === 'confirmed appointment') { 
            echo '  <div id="pop-up-log-in">
                <div class="pop-info-top">&#10003;</div>
                <div class="pop-info-center">
                    <h1>Thank you!</h1>
                    <p>The appointment has been Confirmed. Thanks! '. $doc .'.</p>
                </div>
                <div class="pop-info-bottom"><button class="pop-info-bottom-button" onclick="popUpVanish()">Ok</button></div>
            </div>  ';
        }
    }
    ?>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxs-heart'></i>
            <span class="logo_name" style="white-space: nowrap;">Healer</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" onclick="showSection('home')">
                    <i class='bx bxs-home'></i>
                    <span class="link_name">Home</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#" onclick="showSection('home')">Home</a></li>
                </ul>
            </li>
            <li>
                <a href="#" onclick="showSection('records')">
                    <i class="bx bxs-group"></i>
                    <span class="link_name" style="white-space: nowrap;">Records</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#" onclick="showSection('records')">Records</a></li>
                </ul>
            </li>
            <li>
                <a href="#" onclick="showSection('requests')">
                    <i class='bx bx-notepad'></i>
                    <span class="link_name" style="white-space: nowrap;">Requests</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#" onclick="showSection('requests')">Requests</a></li>
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
                </div>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <!--<img src="image/profile.jpg" alt="profileImg">-->
                    </div>
                    <div class="name-job">
                        <div class="profile_name" style="white-space: nowrap;">CMM Assist</div>
                        <div class="job"><?php echo $docName; ?></div>
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
            <!-- Home -->
            
            
            <section id="home">
                <div class="home-class-home">
                    <article class="home-left">
                        <div class="flex-2">
                            <div class="sched-container">Schedule</div>
                            <a onclick="openPopup()"><div class="search-icon"><i class='bx bx-search'></i></div></a>
                            <div class="search-pop-up" id="search-pop-up">
                                <div class=search-container>
                                    <a href="#" onclick="closePopup()"><i class='bx bx-x'></i></a><br>    
                                    <input class="search-box" type="text" placeholder="Search...">
                                </div>
                            </div>
                        </div>
                        <br>
                        <?php
                            $dataPatient = "SELECT * FROM `appointments` WHERE appointmentStatus = 'ON' AND appointmentDate = CURDATE()"; // need pa ng another condition na dapata date today lang
                            $data = mysqli_query($connect, $dataPatient);

                            if (mysqli_num_rows($data) > 0){ 
                                $i = 1;
                                while ($fetch_data = mysqli_fetch_assoc($data)){
                            ?>
                        <div class="details">
                            <aside class="flex-detail-clickable"  data-patient="<?php echo $fetch_data['firstName']; ?>">
                                <div class="sched-detail">
                                    <i class='bx bx-building'></i>
                                    <div class="patient-name"><?php echo $fetch_data['firstName'] . ' ' . $fetch_data['middleName'] . ' ' . $fetch_data['lastName']; ?></div>
                                </div>
                                <div class="sched-time">
                                    Today, <?php echo $fetch_data['appointmentTime']; ?>
                                </div>
                            </aside>
                        </div>
                        <?php
                            }
                        }
                        ?>
                    </article>
                   
                    <article class="home-right">
                        <?php
                                $dataDetails = "SELECT * FROM `appointments` WHERE appointmentStatus = 'ON'"; // need pa ng another condition na dapata date today lang
                                $dataDetail = mysqli_query($connect, $dataDetails);
                
                                if (mysqli_num_rows($dataDetail) > 0){ 
                                    while ($fetch_detail = mysqli_fetch_assoc($dataDetail)){
                            ?>
                        <div class="log-details"  id="<?php echo $fetch_detail['firstName'] . 'Details'; ?>" style="display: none;">
                            <div class="details-flex-container">
                                <h1 class="details-title">Details</h1>
                                <div class="welcome-and-icon">
                                    <p>Welcome! <span><?php echo $docName; ?></span></p>
                                    <img class="icon-detail-img" src="../Assets/images/male-placeholder.png" alt="asd"> <!--kapag may image ung doctors papalitan to pag wala default-->
                                </div>
                            </div>
                            <div class="patient-profile">
                                <div class="patient-icon">
                                    <img class="patient-picture-details" src="../Assets/images/female-placeholder.png" alt="patient-picture">
                                </div>
                                <div class="patient-name-contaierner">
                                    <div class="patient-name-details"><?php echo $fetch_detail['firstName'] . ' ' . $fetch_detail['middleName'] . ' ' . $fetch_detail['lastName']; ?></div>
                                    <div class="patient-email-details"><?php echo $fetch_detail['email']; ?></div>
                                </div>
                            </div>
                            <div class="sub-profile-details">
                                <div class="contact-details">Contact: <?php echo $fetch_detail['contactNumber']; ?></div>
                                <div class="gender-details">Gender: <?php echo $fetch_detail['gender']; ?></div>
                                <div class="dob-details">Date of Birth: <?php echo $fetch_detail['dob']; ?></div>
                            </div>
                            <br>
                            <div class="identification-details">
                                <h1 class="title">Identification Card</h1>
                                <div class="id-img-container">
                                    <img class="id-img" src="uploads/<?php echo $fetch_detail['id']; ?>" alt="Patient ID Clickable">
                                </div>
                            </div>
                            <div class="service-details">
                                <h1 class="title">Test Service</h1>
                                <p class="service-test"> - <?php echo $fetch_detail['services']; ?></p>
                            </div>
                        </div>     
                        <?php 
                            }
                        }
                        ?>         
                    </article>
                </div>      
            </section>
            <!-- Records  -->
            
            <section id="records" style="display: none;">
                <h1>Records</h1>
                <hr style="opacity: 0.2;"><br>
                <div class="add-container"><a onclick="addRecord()" id="add-record" class="add-record">Add Record</a></div>
                <div class="records-container" id="records-container">
                    <div class="table-wrapper">
                        <table>
                            <tr>
                                <th><div class="theader">Name<i class='bx bx-chevrons-down'></i></div></th>
                                <th><div class="theader">Address<i class='bx bx-chevrons-down'></i></div></th>
                                <th><div class="theader">Gender<i class='bx bx-chevrons-down'></i></div></th>
                                <th><div class="theader">Contact<i class='bx bx-chevrons-down'></i></div></th>
                                <th><div class="theader">Age<i class='bx bx-chevrons-down'></i></div></th>
                                <th><div class="theader">Action<i class='bx bx-chevrons-down'></i></div></th>
                            </tr>
                            <?php
                                $dataQuery = "SELECT * FROM `records`";
                                $doctor = mysqli_query($connect, $dataQuery);

                                if (mysqli_num_rows($doctor) > 0){ 
                            ?>
                            <?php
                                    while ($fetch_doctor = mysqli_fetch_assoc($doctor)){
                                    ?>
                            <tr>
                                <td><?php echo $fetch_doctor['names']; ?></td>
                                <td><?php echo $fetch_doctor['addresss']; ?></td>
                                <td><?php echo $fetch_doctor['gender']; ?></td>
                                <td><?php echo $fetch_doctor['phoneNumber']; ?></td>
                                <td><?php echo $fetch_doctor['edad']; ?></td>
                                <td>
                                    <a class="bx-icon-2" href="RecordUpdate.php?update=<?php echo $fetch_doctor['record_id']; ?>"><i class='bx bxs-edit'></i></a>
                                    <a class="bx-icon-3" href="../backend/delete.php?delete=<?php echo $fetch_doctor['record_id']; ?>" onclick="return  confirm('Are you want to delete this file?')"><i class='bx bxs-trash'></i></a>
                                </td>
                            </tr>
                                <?php 
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <div class="add-records-container" id="add-form">
                    <form action="../backend/AddRecord.php" method="POST">
                        <h1 style="margin-top: -15px;">Patient Details</h1><br>
                        <div class="form-contain">
                            <div class="label-input">
                                <label for="name">Name</label>
                                <input required type="text" name="name" placeholder="Firstname Lastname">
                            </div>
                            <div class="label-input">
                                <label for="gender">Gender</label>
                                <select required name="gender">
                                    <option selected disabled>Choose Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="label-input">
                                <label for="contact">Contact Email</label>
                                <input required type="email" name="contact" placeholder="example@gmail.com">
                            </div>
                        </div><br>
                        <div class="form-contain">
                            <div class="label-input">
                                <label for="age">Age</label>
                                <input required type="text" name="age" placeholder="Edad">
                            </div>
                            <div class="label-input">
                                <label for="height">Height-CM</label>
                                <input required type="number" max="300" min="0" name="height" placeholder="CM">
                            </div>
                            <div class="label-input">
                                <label for="weight">Weight-LBS</label>
                                <input required type="number" max="300" min="0" name="weight" placeholder="LBS">
                            </div>
                        </div><br>
                        <div class="form-contain">
                            <div class="label-input">
                                <label for="phone">Phone number</label>
                                <input required type="text" name="phone" placeholder="09123456789">
                            </div>
                            <div class="label-input" style="width: 66.5%;">
                                <label for="address">Address</label>
                                <input required type="text" name="address" placeholder="# Street City">
                            </div>
                        </div><br><br>
                        <h1>Patient Medical Records</h1><br>
                        <div class="form-contain">
                            <div class="label-input">
                                <label for="allergies">Allergies</label>
                                <input required type="text" name="allergies" placeholder="Food / Drinks / Medicine">
                            </div>
                            <div class="label-input" style="width: 66.5%;">
                                <label for="medication">Patient recently medication taken or none</label>
                                <input required type="text" name="medication" placeholder="Biogesic, Paracetamol, Etc.">
                            </div>
                        </div><br>
                        <div class="form-contain">
                            <div class="label-input">
                                <label for="conditions">Past conditions</label>
                                <input required type="text" name="conditions" placeholder="Covid-19">
                            </div>
                            <div class="label-input">
                                <label for="contactPerson">Contact Person</label>
                                <input required type="text" name="contactPerson" placeholder="Relatives, Guardian, Parents">
                            </div>
                            <div class="label-input">
                                <label for="contactPersonNumber">Contact Person Number</label>
                                <input required type="text" name="contactPersonNumber" placeholder="09123456789">
                            </div>
                        </div><br>
                        <div class="form-contain">
                            <div class="label-input">
                                <label for="alcohol">Last taking alcohol (ALAK)</label>
                                <select required name="alcohol">
                                    <option selected disabled>Choose days</option>
                                    <option value="Non-drinker">Non-drinker</option>
                                    <option value="1 day ago">1 day ago</option>
                                    <option value="2 days ago">2 days ago</option>
                                    <option value="3 days ago">3 days ago</option>
                                    <option value="4 days ago">4 days ago</option>
                                    <option value="5 days ago">5 days ago</option>
                                    <option value="6 days ago">6 days ago</option>
                                    <option value="7 days ago">7 days ago</option>
                                </select>
                            </div>
                            <div class="label-input" style="width: 66.5%;">
                                <label for="presentConditions">Present conditions</label>
                                <input required type="text" name="presentConditions" placeholder="SARS VIRUS">
                            </div>
                        </div><br>
                        <button type="submit" class="add-form-btn">Submit</button>
                    </form>
                </div>
                <br>
            </section>
            
            <!-- Requests  -->
           
            <section id="requests" style="display: none;">
                <h1>Appointment Requests</h1>
                    <hr style="opacity: 0.2;"><br>
                    <div class="records-container" id="records-container">
                        <div class="table-wrapper">
                            <table>
                                <tr>
                                    <th><div class="theader">Name<i class='bx bx-chevrons-down'></i></div></th>
                                    <th><div class="theader">Date of Appointment<i class='bx bx-chevrons-down'></i></div></th>
                                    <th><div class="theader">Service Appointment<i class='bx bx-chevrons-down'></i></div></th>
                                    <th><div class="theader">Gender<i class='bx bx-chevrons-down'></i></div></th>
                                    <th><div class="theader">Contact<i class='bx bx-chevrons-down'></i></div></th>
                                    <th><div class="theader">Action<i class='bx bx-chevrons-down'></i></div></th>
                                </tr>
                                <?php
                                    $dataAppointment = "SELECT * FROM `appointments` WHERE appointmentStatus = ''";
                                    $appointment = mysqli_query($connect, $dataAppointment);

                                    if (mysqli_num_rows($appointment) > 0){ 
                                ?>
                                <?php
                                    while ($fetch_appointment = mysqli_fetch_assoc($appointment)){
                                ?>
                                <tr>
                                    <td><?php echo $fetch_appointment['firstName'] . ' ' . $fetch_appointment['middleName'] . ' ' . $fetch_appointment['lastName']; ?></td>
                                    <td><?php echo $fetch_appointment['appointmentDate'] . ', ' . $fetch_appointment['appointmentTime']; ?></td>
                                    <td><?php echo $fetch_appointment['services']; ?></td>
                                    <td><?php echo $fetch_appointment['gender']; ?></td>
                                    <td><?php echo $fetch_appointment['email']; ?></td>
                                    <td>
                                        <a href="uploads/<?php echo $fetch_appointment['id']; ?>" class="bx-icon-1" style="font-size: 32px;"><i class='bx bxs-id-card'></i></a>
                                        <a href="../backend/appointmentUpdate.php?msg=<?php echo $fetch_appointment['appointment_id']; ?>" onclick="return  confirm('You want to confirm this appointment?')" class="bx-icon-2" style="font-size: 32px;"><i class='bx bx-check'></i></a>
                                        <a href="../backend/delete.php?msg=<?php echo $fetch_appointment['appointment_id']; ?>" class="bx-icon-3" style="font-size: 32px;" onclick="return  confirm('You want to delete this file?')"><i class='bx bx-x'></i></i></a>
                                    </td>
                                </tr> 
                                <?php 
                                    }
                                }
                                ?>     
                            </table>
                        </div>
                    </div>
            </section>
            <!-- messages  -->
            <section id="messages" style="display: none;">
            <h1>Messages</h1>
                    <hr style="opacity: 0.2;"><br>
                    <div class="records-container" id="records-container">
                        <div class="table-wrapper">
                            <table>
                                <tr>
                                    <th><div class="theader">Message sent<i class='bx bx-chevrons-down'></i></div></th>
                                    <th><div class="theader">Name<i class='bx bx-chevrons-down'></i></div></th>
                                    <th><div class="theader">Contact<i class='bx bx-chevrons-down'></i></div></th>
                                    <th><div class="theader">Message<i class='bx bx-chevrons-down'></i></div></th>
                                </tr>
                                <?php
                                    $dataInquiry = "SELECT * FROM `inquiry`";
                                    $inquiry = mysqli_query($connect, $dataInquiry);

                                    if (mysqli_num_rows($inquiry) > 0){ 
                                ?>
                                <?php
                                    while ($fetch_inquiry = mysqli_fetch_assoc($inquiry)){
                                ?>
                                <tr>
                                    <td><?php echo $fetch_inquiry['datestamp']; ?></td>
                                    <td><?php echo $fetch_inquiry['name']; ?></td>
                                    <td><?php echo $fetch_inquiry['email']; ?></td>
                                    <td><?php echo $fetch_inquiry['message']; ?></td>
                                </tr> 
                                <?php 
                                    }
                                }
                                ?>     
                            </table>
                        </div>
                    </div>
            </section>
            <!-- settings  -->
            <section id="settings" style="display: none;">
                
            </section>
        </div>
    </main>
    <script>
        let Submitpopup = document.getElementById("search-pop-up")
        
        function openPopup(){
            Submitpopup.classList.add("open-pop-up")

        }
        function closePopup(){
            Submitpopup.classList.remove("open-pop-up")
        }

        let addButton = document.getElementById("add-record")
        let addForm = document.getElementById("add-form")
        let recordContainer = document.getElementById("records-container")

        function addRecord() {
            if(addButton.innerHTML == "BACK") {
                addForm.style.display = "none";
                recordContainer.style.display = "block";
                addButton.innerHTML = "Add Record";
            } else {
                addForm.style.display = "block";
                recordContainer.style.display = "none";
                addButton.innerHTML = "BACK";
            }
        }


    </script>
    <script src="../Assets/js/admin.js"></script>
    <script src="../Assets/js/doctors.js"></script>
</body>
</html>