<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/doctors.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="icon" href="" type="image/x-icon" class="rounded-circle">
    <title>CMM Doctors</title>
</head>
<body>
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
                        <div class="job">{name of doctor}</div>
                    </div>
                    <a href="../index.html"><i class="bx bx-log-out"></i></a>
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
                        <div class="details">
                            <aside class="flex-detail-clickable active" data-patient="MariaDoe">
                                <div class="sched-detail">
                                    <i class='bx bx-building'></i>
                                    <div class="patient-name">Maria Doe</div>
                                </div>
                                <div class="sched-time">
                                    Today, 6:00 am
                                </div>
                            </aside>
                            <aside class="flex-detail-clickable" data-patient="JohnDoe">
                                <div class="sched-detail">
                                    <i class='bx bx-building'></i>
                                    <div class="patient-name">John Doe</div>
                                </div>
                                <div class="sched-time">
                                    Today, 9:00 am
                                </div>
                            </aside>
                        </div>
                    </article>
                    <article class="home-right">
                        <div class="log-details" id="MariaDoeDetails">
                            <div class="details-flex-container">
                                <h1 class="details-title">Details</h1>
                                <div class="welcome-and-icon">
                                    <p>Welcome! <span>John Bravo</span></p>
                                    <img class="icon-detail-img" src="../Assets/images/male-placeholder.png" alt="asd"> <!--kapag may image ung doctors papalitan to pag wala default-->
                                </div>
                            </div>
                            <div class="patient-profile">
                                <div class="patient-icon">
                                    <img class="patient-picture-details" src="../Assets/images/female-placeholder.png" alt="patient-picture">
                                </div>
                                <div class="patient-name-contaierner">
                                    <div class="patient-name-details">Maria doe</div>
                                    <div class="patient-email-details">MariaDoe@gmail.com</div>
                                </div>
                            </div>
                            <div class="sub-profile-details">
                                <div class="contact-details">Contact: 09992348764</div>
                                <div class="gender-details">Gender: Female</div>
                                <div class="dob-details">Date of Birth: May 2, 2000</div>
                            </div>
                            <br>
                            <div class="identification-details">
                                <h1 class="title">Identification Card</h1>
                                <div class="id-img-container">
                                    <img class="id-img" src="" alt="Patient ID Clickable">
                                </div>
                            </div>
                            <div class="service-details">
                                <h1 class="title">Test Service</h1>
                                <p class="service-test"> - Pulmonology</p>
                            </div>
                        </div>  
                        <div class="log-details" id="JohnDoeDetails" style="display: none;">
                            <div class="details-flex-container">
                                <h1 class="details-title">Details</h1>
                                <div class="welcome-and-icon">
                                    <p>Welcome! <span>Jane Smith</span></p>
                                    <img class="icon-detail-img" src="../Assets/images/female-placeholder.png" alt="asd">
                                </div>
                            </div>
                            <div class="patient-profile">
                                <div class="patient-icon">
                                    <img class="patient-picture-details" src="../Assets/images/male-placeholder.png" alt="patient-picture">
                                </div>
                                <div class="patient-name-contaierner">
                                    <div class="patient-name-details">John Doe</div>
                                    <div class="patient-email-details">JohnDoe@gmail.com</div>
                                </div>
                            </div>
                            <div class="sub-profile-details">
                                <div class="contact-details">Contact: 09876543210</div>
                                <div class="gender-details">Gender: Male</div>
                                <div class="dob-details">Date of Birth: September 15, 1985</div>
                            </div>
                            <br>
                            <div class="identification-details">
                                <h1 class="title">Identification Card</h1>
                                <div class="id-img-container">
                                    <img class="id-img" src="" alt="Patient ID Clickable">
                                </div>
                            </div>
                            <div class="service-details">
                                <h1 class="title">Test Service</h1>
                                <p class="service-test"> - Cardiology</p>
                            </div>
                        </div>                    
                    </article>
                </div>
            </section>
            <!-- Records  -->
            <section id="records" style="display: none;">
                
            </section>
            <!-- Requests  -->
            <section id="requests" style="display: none;">
                
            </section>
            <!-- messages  -->
            <section id="messages" style="display: none;">
                
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
    </script>
    <script src="../Assets/js/admin.js"></script>
    <script src="../Assets/js/doctors.js"></script>
</body>
</html>