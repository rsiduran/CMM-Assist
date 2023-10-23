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
    const dateTime = document.getElementById("datetime");

    function checkedBoxes() {
    let checked = false;

    for (let checkboxes of checkbox) {
        if(checkboxes.checked) {
           checked = true;
           break;
        }
    }

    const dateTimeValue = dateTime.value;
    if(checked) {
        if(dateTimeValue) {
        showSection('wrapper-right-2');
        } else {
            alert("Please select the date and time of the appointment.");
        return;
        }
    } else {
        alert("Please select at least one service.");
    }
}
nextBtn.addEventListener("click", checkedBoxes);
});