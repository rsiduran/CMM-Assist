<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/appointment.css">
    <link rel="stylesheet" href="../Assets/css/calendarStyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    
    <title>CMM Assist Appointment</title>
</head>

<body>
    <header>
        <div class="left-header">
            <a href="../index.html" class="bold">Home</a>
            <span class="lineY"></span>
            <p class="light">Appointment Form</p>
        </div>
        <div class="right-header">
            <img class="cmm-logo" src="../Assets/images/CMM LOGO.png" alt="CMM logo">
        </div>
    </header>
    <main>
        <div class="wrapper">
            <article>
                <p class="current-date"></p>
                <div class="icons">
                    <span id="prev" class="material-symbols-rounded">chevron_left</span>
                    <span id="next" class="material-symbols-rounded">chevron_right</span>
                </div>
            </article>
            <div class="calendar">
                <ul class="weeks">
                    <li>Sun</li>
                    <li>Mon</li>
                    <li>Tue</li>
                    <li>Wed</li>
                    <li>Thu</li>
                    <li>Fri</li>
                    <li>Sat</li>
                </ul>
                <ul class="days"></ul>
            </div>
        </div>
        <form action="" onsubmit="return validateForm();">
            <div class="wrapper-right" id="wrapper-right-1">
                <h2 class="header-2">Choose Services</h2>
                <p class="text-description-1">Our doctors are highly trained clinicians capable of diagnosing complex
                    conditions. Schedule an appointment now.</p>
                <p class="text-description-2">Located at <a
                        href="https://www.google.com/maps/place/CMM+Medical+and+Diagnostic+Clinic/@14.652684,120.9696821,17z/data=!3m1!4b1!4m6!3m5!1s0x3397b5d8a76b7da5:0xe80243276b5d5fdc!8m2!3d14.652684!4d120.972257!16s%2Fg%2F11n__96tp9?entry=ttu"
                        target="_blank">510 A. Mabini St., Brgy. 13, Caloocan City</a></p>
                <div class="grid-container">
                    <div class="grid-content">
                        <h3 class="titles">Specialty Consultations</h3>
                        <label><input type="checkbox" name="specialty" value="Nephrology"> Nephrology</label>
                        <label><input type="checkbox" name="specialty" value="Cardiology"> Cardiology</label>
                        <label><input type="checkbox" name="specialty" value="Pulmonology"> Pulmonology</label>
                        <label><input type="checkbox" name="specialty" value="Urology"> Urology</label>
                        <label><input type="checkbox" name="specialty" value="Orthopedics"> Orthopedics</label>
                        <label><input type="checkbox" name="specialty" value="Endocrinology"> Endocrinology</label>
                        <label><input type="checkbox" name="specialty" value="Neurology"> Neurology</label>
                        <label><input type="checkbox" name="specialty" value="Pediatrics"> Pediatrics</label>
                    </div>
    
                    <div class="grid-content">
                        <h3 class="titles">Laboratory Tests</h3>
                        <label><input type="checkbox" name="laboratory" value="Blood Test"> Blood Test</label>
                        <label><input type="checkbox" name="laboratory" value="Antigen/Antibody Test"> Antigen/Antibody Test</label>
                        <label><input type="checkbox" name="laboratory" value="Mircrobial Test"> Mircrobial Test</label>
                        <label><input type="checkbox" name="laboratory" value="Semen Test"> Semen Test</label>
                        <label><input type="checkbox" name="laboratory" value="Stool Test"> Stool Test</label>
                        <label><input type="checkbox" name="laboratory" value="Urine Test"> Urine Test</label>
                        <label><input type="checkbox" name="laboratory" value="RT-PCR Test"> RT-PCR Test</label>
                        <label><input type="checkbox" name="laboratory" value="ECG"> ECG</label>
                    </div>
    
                    <div class="grid-content">
                        <h3 class="titles">Imaging</h3>
                        <label><input type="checkbox" name="imaging" value="X-Ray"> X-Ray</label>
                        <label><input type="checkbox" name="imaging" value="General Ultrasound"> General Ultrasound</label>
                        <label><input type="checkbox" name="imaging" value="OB Ultrasound"> OB Ultrasound</label>
                        <label><input type="checkbox" name="imaging" value="CT Scan"> CT Scan</label>
                        <label><input type="checkbox" name="imaging" value="MRI Option"> MRI Option</label>
                    </div>
    
                    <div class="grid-content">
                        <h3 class="titles">Date of Appointment</h3>
                        <label for="datetime">Select Date and Time:</label>
                        <input type="datetime-local" id="datetime" name="datetime" required>
                        <!-- <a href="#" id="showWrapperRight2" class="next-page-button" style="text-decoration: none;">Next</a> -->
                        <a id="next-page-button" class="next-page-button" style="text-decoration: none; font-size: 16px;" onclick="showSection('wrapper-right-2')">Next</a>
                    </div>
                </div>
            </div>
            <div class="wrapper-right" id="wrapper-right-2" style="display: none;">
                <h2 class="header-2">Personal Details</h2>
                <p class="text-description-1">Please complete this form truthfully and accurately. Your honest responses are essential for us to provide you with the best possible service.</p>
                <div class="grid-container">
                    <div class="grid-content-1">
                        <label for="firstName" class="grid-content">First Name:</label>
                        <input placeholder="Juan" class="input-field" type="text" id="firstName" name="firstName" required><br><br>
                        
                        <label for="email" class="grid-content">Email:</label>
                        <input placeholder="email@example.com" class="input-field" type="email" id="email" name="email" required><br><br>
                        
                        <label for="dob">Date of Birth:</label>
                        <input required class="input-field" type="date" id="dob" name="dob" placeholder="MM/DD/YYYY" onchange="validateDate()">
                        <p id="dob-error" style="color: red;"></p>
                    </div>
                    <div class="grid-content-2">
                        <label for="lastName" class="grid-content">Last Name:</label>
                        <input placeholder="Dela Cruz" class="input-field" type="text" id="lastName" name="lastName" required><br><br>     
                        <label for="contactNumber">Contact No:</label>
                        <input placeholder="09*********" class="input-field" type="tel" id="contactNumber" name="contactNumber" required><br><br>
                    </div>
                    <div class="grid-content-3">
                        <label for="middleName" class="grid-content">Middle Name:</label>
                        <input placeholder="Diaz" class="input-field" type="text" id="middleName" name="middleName" required><br><br>
    
                        <label for="gender">Gender:</label>
                        <select required id="gender" class="input-field">
                            <option value="" disabled selected>Choose Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="grid-content" style="margin-top: 7px;">
                        <h2 class="header-id">Identification Card</h2>
                        <p class="text-description-id">Please upload a valid identification document. If the patient does not possess one, please submit the guardian's ID instead.</p>
                        <h3 class="header-3">Identification Card</h3>
                        <label class="custom-file-input">
                            <span>Attach your file here:</span><br>
                            <input required type="file" class="clickable-file">
                        </label>
                    </div>
                    <div class="grid-content">
                        <h2 class="header-id">Clinic Hours</h2>
                        <p class="text-description-id">We're delighted to have you as a patient. Our clinic operates during the following hours except holidays. </p> <p class="text-bold"> <b>(7:00 am to 4:00 pm)</b></p>
                    </div>
                    <button id="cancel-button" class="cancel-button" style="text-decoration: none;" onclick="showSection('wrapper-right-1')">Back</button>
                    <button type="submit" id="confirm-button" class="confirm-button" style="text-decoration: none;">Confirm</button>
                </div>
            </div>
        </form>
    </main>
    <script src="../Assets/js/calendarScript.js" defer></script>
    <script src="../Assets/js/appointment.js"></script>
</body>

</html>