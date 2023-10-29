function showSection(sectionId) {
    // Get all sections
    var sections = document.querySelectorAll('.wrapper-right');
  
    // Hide all sections
    for (var i = 0; i < sections.length; i++) {
        sections[i].style.display = 'none';
    }
  
    // Show the selected section
    var selectedSection = document.getElementById(sectionId);
    if (selectedSection) {
        selectedSection.style.display = 'block';
    }
  }

  document.addEventListener("DOMContentLoaded", function() {
    const checkbox = document.querySelectorAll('input[type="checkbox"]');
    const nextBtn = document.getElementById("next-page-button");
    const dateInput = document.getElementById("appointmentDate");
    const timeInput = document.getElementById("appointmentTime");

    function checkedBoxes() {
        let checked = false;

        for (let checkboxes of checkbox) {
            if (checkboxes.checked) {
                checked = true;
                break;
            }
        }

        const dateValue = dateInput.value;
        const timeValue = timeInput.value;

        if (checked) {
            if (dateValue) {
                if (timeValue) {
                    showSection('wrapper-right-2');
                } else {
                    alert("Please select the time of the appointment.");
                }
            } else {
                alert("Please select the date of the appointment.");
            }
        } else {
            alert("Please select at least one service.");
        }
    }

    nextBtn.addEventListener("click", checkedBoxes);
});


function validateInfo() {
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var middleName = document.getElementById("middleName").value;
    var contactNumber = document.getElementById("contactNumber").value;

    var textValidation = /^[a-zA-Z.]+(?:\s[a-zA-Z.]+)*$/;
    var numberValidation = /^[0-9]{11}$/;

    if(!textValidation.test(firstName)) {
        alert("Invalid first name");
        return false;
    }

    if(!textValidation.test(lastName)) {
        alert("Invalid last name");
        return false;
    }

    if(!textValidation.test(middleName)) {
        alert("Invalid middle name");
        return false;
    }

    if(!numberValidation.test(contactNumber)) {
        alert("Invalid contact number");
        return false;
    }
    return true;
}