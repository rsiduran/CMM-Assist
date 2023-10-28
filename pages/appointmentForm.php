<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
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
            <a href="../index.php" class="bold">Home</a>
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
        <form action="checkAppoint.php" method="POST" onsubmit="return validateInfo()" enctype="multipart/form-data">
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
                        <label><input type="checkbox" name="Nephrology" value="Nephrology"> Nephrology</label>
                        <label><input type="checkbox" name="Cardiology" value="Cardiology"> Cardiology</label>
                        <label><input type="checkbox" name="Pulmonology" value="Pulmonology"> Pulmonology</label>
                        <label><input type="checkbox" name="Urology" value="Urology"> Urology</label>
                        <label><input type="checkbox" name="Orthopedics" value="Orthopedics"> Orthopedics</label>
                        <label><input type="checkbox" name="Endocrinology" value="Endocrinology"> Endocrinology</label>
                        <label><input type="checkbox" name="Neurology" value="Neurology"> Neurology</label>
                        <label><input type="checkbox" name="Pediatrics" value="Pediatrics"> Pediatrics</label>
                    </div>
    
                    <div class="grid-content">
                        <h3 class="titles">Laboratory Tests</h3>
                        <label><input type="checkbox" name="Blood" value="Blood Test"> Blood Test</label>
                        <label><input type="checkbox" name="Antigen" value="Antigen/Antibody Test"> Antigen/Antibody Test</label>
                        <label><input type="checkbox" name="Mircrobial" value="Mircrobial Test"> Mircrobial Test</label>
                        <label><input type="checkbox" name="Semen" value="Semen Test"> Semen Test</label>
                        <label><input type="checkbox" name="Stool" value="Stool Test"> Stool Test</label>
                        <label><input type="checkbox" name="Urine" value="Urine Test"> Urine Test</label>
                        <label><input type="checkbox" name="RT" value="RT-PCR Test"> RT-PCR Test</label>
                        <label><input type="checkbox" name="ECG" value="ECG"> ECG</label>
                    </div>
    
                    <div class="grid-content">
                        <h3 class="titles">Imaging</h3>
                        <label><input type="checkbox" name="X-Ray" value="X-Ray"> X-Ray</label>
                        <label><input type="checkbox" name="General" value="General Ultrasound"> General Ultrasound</label>
                        <label><input type="checkbox" name="OB" value="OB Ultrasound"> OB Ultrasound</label>
                        <label><input type="checkbox" name="CT" value="CT Scan"> CT Scan</label>
                        <label><input type="checkbox" name="MRI" value="MRI Option"> MRI Option</label>
                    </div>
    
                    <div class="grid-content">
                        <h3 class="titles">Date of Appointment</h3>
                        <label for="datetime">Select Date and Time:</label>
                        <input type="datetime-local" id="datetime" name="datetime">
                        <!-- <a href="#" id="showWrapperRight2" class="next-page-button" style="text-decoration: none;">Next</a> -->
                        <button id="next-page-button" class="next-page-button" style="text-decoration: none; font-size: 16px;">Next</button>
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
                        <input  class="input-field" type="date" id="dob" name="dob" placeholder="MM/DD/YYYY" onchange="validateDate()" required>
                        <p id="dob-error" style="color: red;"></p>
                    </div>
                    <div class="grid-content-2">
                        <label for="lastName" class="grid-content">Last Name:</label>
                        <input placeholder="Dela Cruz" class="input-field" type="text" id="lastName" name="lastName" required><br><br>     
                        <label for="contactNumber">Contact No:</label>
                        <input placeholder="09*********" class="input-field" type="number" id="contactNumber" name="contactNumber" required><br><br>
                    </div>
                    <div class="grid-content-3">
                        <label for="middleName" class="grid-content">Middle Name:</label>
                        <input placeholder="Diaz" class="input-field" type="text" id="middleName" name="middleName" required><br><br>
    
                        <label for="gender">Gender:</label>
                        <select  id="gender" name="gender" class="input-field" required>
                            <option value="" disabled selected >Choose Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="grid-content" style="margin-top: 7px;">
                        <h2 class="header-id">Identification Card</h2>
                        <p class="text-description-id">Please upload a valid identification document. If the patient does not possess one, please submit the guardian's ID instead.</p>
                        <h3 class="header-3">Identification Card</h3>
                        <label class="custom-file-input">
                            <span>Attach your file here:</span><br>
                            <input name="identification" type="file" class="clickable-file" required>
                        </label>
                    </div>
                    <div class="grid-content">
                        <h2 class="header-id">Clinic Hours</h2>
                        <p class="text-description-id">We're delighted to have you as a patient. Our clinic operates during the following hours except holidays. </p> <p class="text-bold"> <b>(7:00 am to 4:00 pm)</b></p>
                    </div>
                    <a id="cancel-button" class="cancel-button" style="text-decoration: none;" onclick="showSection('wrapper-right-1')">Back</a>
                    <button type="submit" id="confirm-button" class="confirm-button" style="text-decoration: none;">Confirm</button>
                </div>
            </div>
        </form>
    </main>
    <script src="../Assets/js/calendarScript.js" defer></script>
    <script src="../Assets/js/appointment.js" defer></script>
</body>
<script>

// Appointment date and time
const dateTimeInput = document.getElementById("datetime");
let dateTime;

const defaultDate = new Date();
defaultDate.setDate(defaultDate.getDate() + 2);
const defaultDateString = defaultDate.toISOString().slice(0, 16);
dateTimeInput.min = defaultDateString;

dateTimeInput.addEventListener("input", function (event) {
  const selectedDateTime = new Date(this.value);
  const minTime = new Date(selectedDateTime);
  minTime.setHours(7, 0, 0, 0);
  const maxTime = new Date(selectedDateTime);
  maxTime.setHours(16, 0, 0, 0);

  const timeValid = selectedDateTime >= minTime && selectedDateTime <= maxTime;

  if (!timeValid) {
    alert("The clinic is open only from 7:00 AM to 4:00 PM.");
    event.preventDefault();
    this.value = this.value.split("T")[0] + "T07:00";
  } else {
    dateTime = this.value;
  }
});


// date of birth
var dobDate = document.getElementById("dob");

    var dobDefault = new Date();   
    var formatteddobDefault = dobDefault.toISOString().slice(0, 10);

    dobDate.setAttribute("max", formatteddobDefault);

</script>
</html>