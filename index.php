<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CMM Assist</title>
    <link rel="stylesheet" href="Assets/css/style.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="Assets/css/popup.css">
</head>

<body>
    <?php // in this code its checking whether an error occured after getting it 
        if(isset($_GET['error'])) { // it has two purpose 1 for sign in and 1 for sign up
        $error = $_GET['error']; 
        if($error === 'success') {  // if the error statement is equal to none it would create account
            echo '  <div id="pop-up-log-in">
                        <div class="pop-info-top">&#10003;</div>
                        <div class="pop-info-center">
                            <h1 style="font-size: 48px;">Thank You!</h1><br>
                            <p>You message is successfully submitted. Thanks!</p>
                        </div>
                        <div class="pop-info-bottom"><button class="pop-info-bottom-button" onclick="popUpVanish()">Ok</button></div>
                    </div>  ';
        }
        else { 
            
        }
        }
    ?>
    <?php 
        if(isset($_GET['message'])) { 
        $error = $_GET['message']; 
        if($error === 'Successfully Appointed.') {  
            echo '  <div id="pop-up-log-in">
                        <div class="pop-info-top">&#10003;</div>
                        <div class="pop-info-center">
                            <h1 style="font-size: 48px;">Thank You!</h1><br>
                            <p>Your appointment is successful. Thanks!</p>
                        </div>
                        <div class="pop-info-bottom"><button class="pop-info-bottom-button" onclick="popUpVanish()">Ok</button></div>
                    </div>  ';
        }
        else { 
            
        }
        }
    ?>
    <div class="sign-container">
        <div class="sign-in-pop-up" id="signInPopUp">
            <i class="bx bx-x bx-md ekis-icon" id="ekis-icon"></i>
            <div class="top-sign-in">
                <p class="sign-in-title">Sign in</p>
                <img class="sign-in-logo-img" src="Assets/images/CMM LOGO.png" alt="CMM LOGO" />
            </div>
            <div class="sign-in-text">
                Kindly provide your credentials to access the secure portal. To
                proceed, please enter your account.
            </div>
            <div class="sign-in-inputs">
                <form id="login-form" action="backend/accountLogin.php" method="POST">
                    <label class="label-field-sign-in" for="fullname">Username:</label><br />
                    <input class="sign-in-input" type="text" id="username" name="username" required /><br /><br />

                    <label class="label-field-sign-in" for="password">Password:</label><br />
                    <input class="sign-in-input" type="password" id="password" name="password" required />
                    <p class="sign-in-forgot">Forgot password?</p>

                    <div class="btn-container">
                        <button class="log-in-btn" type="submit">Sign in</button>
                    </div>
                    <p id="error-message" class="error-message" style="color: red; font-size: 12px">
                        <?php // in this code its checking whether an error occured after getting it 
                            if(isset($_GET['error'])) { // it has two purpose 1 for sign in and 1 for sign up
                            $error = $_GET['error']; 
                            if($error === 'none') {  // if the error statement is equal to none it would create account
                                echo "<script>alert('Account Created');</script>";
                            }
                            else { // otherwise its having its error with its value error that we get using $_GET to collect the data
                                echo 'Invalid username or password. Try again.';
                            }
                            }
                        ?>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <nav class="navbar">
        <div class="nav-title">
            <h2>CMM assist</h2>
        </div>
        <div class="nav-sections">
            <ul>
                <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                <li class="nav-item">
                    <a href="#services" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#doctors" class="nav-link">Doctors</a>
                </li>
                <li class="nav-item">
                    <a href="#about-us" class="nav-link">About us</a>
                </li>
                <li class="nav-item">
                    <a href="#contact-us" class="nav-link">Contact us</a>
                </li>
                <li class="nav-item">
                    <a href="#sign-in" class="btn-sign-in nav-link" id="signInLink">SIGN IN</a>
                </li>
            </ul>
        </div>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>

    <main id="home">
        <div class="bg-front">
            <div class="bg-front-background"></div>
            <div class="container-center">
                <div class="image-logo">
                    <img class="img-l" src="Assets/images/CMM LOGO.png" alt="CMM_Logo" />
                </div>
                <div class="text">
                    "Before you worry about the beauty of your body, worry about the
                    health of your body."
                </div>
                <a href="pages/appointmentForm.php" class="appointment-btn">Appoint Now</a>
            </div>
        </div>
    </main>

    <section id="services">
        <div class="services">
            <h1 class="section-title">CMM Services</h1>
            <div class="line"></div>
            <div class="texts">
                <div class="text-1">
                    Clinic services encompass a wide range of specialized medical care
                    offerings, addressing diverse healthcare needs. From cardiology to
                    pediatrics, these clinics play a crucial role in providing tailored
                    healthcare solutions to individuals and communities.
                </div>
                <div class="text-2">
                    In this brief introduction, we will explore the significance of
                    various clinic services in meeting the specific needs of patients.
                </div>
                <div class="text-3">Explore our Services</div>
            </div>
            <div class="grid-container-services">
                <div class="grid-item color-1">
                    <img class="services-img1" src="Assets/images/service2.png" alt="Services" />
                    <div class="service-title">Speciality Consultations</div>
                </div>
                <div class="grid-item color-2">
                    <img class="services-img2" src="Assets/images/service6.png" alt="Services" />
                    <div class="service-title">Nephrology</div>
                </div>
                <div class="grid-item color-3">
                    <img class="services-img3" src="Assets/images/service4.png" alt="Services" />
                    <div class="service-title">Pulmonology</div>
                </div>
                <div class="grid-item color-4">
                    <img class="services-img4" src="Assets/images/service1.png" alt="Services" />
                    <div class="service-title">Urology</div>
                </div>
                <div class="grid-item color-5">
                    <img class="services-img5" src="Assets/images/service5.png" alt="Services" />
                    <div class="service-title">Orthopedics</div>
                </div>
                <div class="grid-item color-6">
                    <img class="services-img6" src="Assets/images/service3.png" alt="Services" />
                    <div class="service-title">Endocrinology</div>
                </div>
            </div>
        </div>
    </section>

    <section id="doctors">
        <div class="doctors">
            <h1 class="section-title">Our Doctors</h1>
            <div class="line"></div>
            <div class="text-doctors">
                "𝑷𝒓𝒊𝒐𝒓𝒊𝒕𝒊𝒛𝒆 𝒀𝒐𝒖𝒓 𝑾𝒆𝒍𝒍-𝒃𝒆𝒊𝒏𝒈 𝑻𝒐𝒅𝒂𝒚 𝒇𝒐𝒓 𝒂 𝑯𝒆𝒂𝒍𝒕𝒉𝒊𝒆𝒓
                𝑻𝒐𝒎𝒐𝒓𝒓𝒐𝒘! 𝑬𝒙𝒑𝒍𝒐𝒓𝒆
                𝒐𝒖𝒓 𝒄𝒐𝒎𝒑𝒓𝒆𝒉𝒆𝒏𝒔𝒊𝒗𝒆 𝒉𝒆𝒂𝒍𝒕𝒉 𝒔𝒆𝒓𝒗𝒊𝒄𝒆𝒔 𝒂𝒏𝒅 𝒔𝒕𝒂𝒓𝒕 𝒚𝒐𝒖𝒓
                𝒘𝒆𝒍𝒍𝒏𝒆𝒔𝒔 𝒋𝒐𝒖𝒓𝒏𝒆𝒚 𝒘𝒊𝒕𝒉
                𝒖𝒔 𝒂𝒕
                <span class="ft-bold"><br /><br />CMM Medical and Diagnostic Clinic.</span>"
            </div>
        </div>
        <div class="grid-container-doctors">
            <div class="grid-item color-green">
                <div class="front-card">
                    <img class="doctors-img" src="Assets/images/female-placeholder.png" alt="Doctors" />
                </div>
                <div class="doctors-info-green back-card">
                    <div class="doctors-text-1">Lorem Ipsum</div>
                    <div class="doctors-text-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                    </div>
                    <div class="doctors-text-3">Critical Care Medicine Specialists</div>
                    <div class="doctors-socials">
                        <i class="bx bxl-facebook bx-md"></i>
                        <i class="bx bxl-twitter bx-md"></i>
                        <i class="bx bxl-instagram bx-md"></i>
                    </div>
                </div>
            </div>
            <div class="grid-item color-blue">
                <div class="front-card">
                    <img class="doctors-img" src="Assets/images/male-placeholder.png" alt="Doctors" />
                </div>
                <div class="doctors-info-blue back-card">
                    <div class="doctors-text-1">Lorem Ipsum</div>
                    <div class="doctors-text-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                    </div>
                    <div class="doctors-text-3">Critical Care Medicine Specialists</div>
                    <div class="doctors-socials">
                        <i class="bx bxl-facebook bx-md"></i>
                        <i class="bx bxl-twitter bx-md"></i>
                        <i class="bx bxl-instagram bx-md"></i>
                    </div>
                </div>
            </div>
            <div class="grid-item color-green">
                <div class="front-card">
                    <img class="doctors-img" src="Assets/images/female-placeholder.png" alt="Doctors" />
                </div>
                <div class="doctors-info-green back-card">
                    <div class="doctors-text-1">Lorem Ipsum</div>
                    <div class="doctors-text-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                    </div>
                    <div class="doctors-text-3">Critical Care Medicine Specialists</div>
                    <div class="doctors-socials">
                        <i class="bx bxl-facebook bx-md"></i>
                        <i class="bx bxl-twitter bx-md"></i>
                        <i class="bx bxl-instagram bx-md"></i>
                    </div>
                </div>
            </div>
            <div class="grid-item color-blue">
                <div class="front-card">
                    <img class="doctors-img" src="Assets/images/male-placeholder.png" alt="Doctors" />
                </div>
                <div class="doctors-info-blue back-card">
                    <div class="doctors-text-1">Lorem Ipsum</div>
                    <div class="doctors-text-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                    </div>
                    <div class="doctors-text-3">Critical Care Medicine Specialists</div>
                    <div class="doctors-socials">
                        <i class="bx bxl-facebook bx-md"></i>
                        <i class="bx bxl-twitter bx-md"></i>
                        <i class="bx bxl-instagram bx-md"></i>
                    </div>
                </div>
            </div>
            <div class="grid-item color-green">
                <div class="front-card">
                    <img class="doctors-img" src="Assets/images/female-placeholder.png" alt="Doctors" />
                </div>
                <div class="doctors-info-green back-card">
                    <div class="doctors-text-1">Lorem Ipsum</div>
                    <div class="doctors-text-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                    </div>
                    <div class="doctors-text-3">Critical Care Medicine Specialists</div>
                    <div class="doctors-socials">
                        <i class="bx bxl-facebook bx-md"></i>
                        <i class="bx bxl-twitter bx-md"></i>
                        <i class="bx bxl-instagram bx-md"></i>
                    </div>
                </div>
            </div>
            <div class="grid-item color-blue">
                <div class="front-card">
                    <img class="doctors-img" src="Assets/images/male-placeholder.png" alt="Doctors" />
                </div>
                <div class="doctors-info-blue back-card">
                    <div class="doctors-text-1">Lorem Ipsum</div>
                    <div class="doctors-text-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua
                    </div>
                    <div class="doctors-text-3">Critical Care Medicine Specialists</div>
                    <div class="doctors-socials">
                        <i class="bx bxl-facebook bx-md"></i>
                        <i class="bx bxl-twitter bx-md"></i>
                        <i class="bx bxl-instagram bx-md"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us">
        <div class="about-us-top">
            <h1 class="section-title">About us</h1>
            <div class="line"></div>
            <div class="texts">
                <h2 class="text-title-about-us">Mision</h2>
                <div class="text-about-us">
                    Caring for life, researching for health, educating those who serve
                </div>
                <h2 class="text-title-about-us">Vision</h2>
                <div class="text-about-us">
                    Our vision for the CMM is to be the best place for care anywhere and
                    the best place to work in healthcare.
                </div>
                <br />
            </div>
        </div>
        <div class="about-us">
            <div class="map-left">
                <iframe class="map-frame"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.057293357939!2d120.96968207578999!3d14.652689175797883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b5d8a76b7da5%3A0xe80243276b5d5fdc!2sCMM%20Medical%20and%20Diagnostic%20Clinic!5e0!3m2!1sen!2sph!4v1693922635928!5m2!1sen!2sph"
                    width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="about-us-bottom">
            <div class="phone">
                <i class="bx bxs-phone bx-sm icon-about-us"></i>
                <p>0998 275 2097</p>
            </div>
            <div class="email">
                <i class="bx bx-envelope bx-sm icon-about-us"></i>
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJvlqhcsKZzBbrnFCNGdmkWwFsZzDjlRtQSMZLHrqXppcLcvlhQqxFhRqBLmPnJFVhMnCHg"
                    target="_blank">clinicname@gmail.com</a>
            </div>
            <div class="facebook">
                <i class="bx bxl-facebook-circle bx-sm icon-about-us"></i>
                <a href="https://www.facebook.com/cmm.mdc/photos"
                    target="_blank">https://www.facebook.com/cmm.mdc/photos</a>
            </div>
        </div>
    </section>

    <section id="contact-us">
        <div class="contact-us-left">
            <h1 class="contact-us-title">Connect with us</h1>
            <div class="long-line"></div>
            <div class="y-line">
                <div class="text-contact-us">
                    If you are experiencing issues or have questions let us know by
                    filling out the form below
                </div>
            </div>
            <form class="contact-us-form" action="backend/contactUs.php" method="post">
                <label class="label-field" for="fullname">Full Name:</label><br />
                <input class="input-field" autocomplete="off" type="text" id="fullname" name="inquiry_name" required
                    pattern="[A-Za-z. ]+" /><br /><br />

                <label class="label-field" for="email">Email:</label><br />
                <input class="input-field" autocomplete="off" type="email" id="email" name="inquiry_email"
                    required /><br /><br />

                <label class="label-field" for="message">Message:</label><br />
                <textarea style="
              min-width: 200px;
              max-height: 300px;
              max-width: 840px;
              min-height: 100px;
            " class="input-field" autocomplete="off" id="message" name="inquiry_message" rows="4" cols="50"
                    required></textarea><br /><br />

                <input class="contact-us-submit" type="submit" value="Submit" name="submit" />
            </form>
        </div>
        <div class="contact-us-right">
            <div class="image-top">
                <img class="contact-us-images" src="Assets/images/CMM LOGO.png" alt="CMM LOGO" />
            </div>
            <div class="image-bottom">
                <img class="contact-us-images" src="Assets/images/contact-us-image.jpg" alt="CMM Fam" />
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="footer">
            <div class="top-footer">
                <div class="icon-head">
                    <img class="footer-icon-img" src="Assets/images/footer-icon.png" alt="Footer Icon" />
                </div>
                <div class="years">2</div>
                <div class="text-years">YEARS OF EXPERIENCE</div>
            </div>
            <div class="longline"></div>
            <div class="socials">
                <div class="fb"><i class="bx bxl-facebook bx-sm"></i></div>
                <div class="tw"><i class="bx bxl-twitter bx-sm"></i></div>
                <div class="ggl"><i class="bx bxl-gmail bx-sm"></i></div>
            </div>
            <div>
                <a href="#footer" class="copyrights">2023 Copyright. All rights reserved.</a>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="Assets/js/main.js"></script>

    <script>
        // const loginForm = document.getElementById("login-form");
        // const usernameInput = document.getElementById("username");
        // const passwordInput = document.getElementById("password");
        // const errorMessage = document.getElementById("error-message");

        // loginForm.addEventListener("submit", function (e) {
        //     e.preventDefault();

        //     const enteredUsername = usernameInput.value;
        //     const enteredPassword = passwordInput.value;

        //     if (enteredUsername === "admin" && enteredPassword === "admin") {
        //         window.location.href = "pages/admin.php";
        //     } else {
        //         errorMessage.textContent = "Invalid username or password. Try again.";
        //         usernameInput.value = "";
        //         passwordInput.value = "";
        //     }
        // });
        function popUpVanish() {
        const popup = document.getElementById("pop-up-log-in")
        if(popup) {
            popup.style.display = 'none';
        }
        }
    </script>
</body>

</html>