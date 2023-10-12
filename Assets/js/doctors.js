// Get the clickable elements
const clickableElements = document.querySelectorAll(".flex-detail-clickable");

// Add click event listener to each clickable element
clickableElements.forEach((element) => {
    element.addEventListener("click", () => {
        // Remove active class from all clickable elements
        clickableElements.forEach((el) => {
            el.classList.remove("active");
        });

        // Add active class to the clicked element
        element.classList.add("active");

        const patientId = element.getAttribute("data-patient");
        const patientDetails = document.getElementById(patientId + "Details");

        // Hide all patient details first
        const allPatientDetails = document.querySelectorAll(".log-details");
        allPatientDetails.forEach((detail) => {
            detail.style.display = "none";
        });

        // Show the patient details for the clicked element
        if (patientDetails) {
            patientDetails.style.display = "block";
        }
    });
});

const recordClickableElements = document.querySelectorAll(".record-detail-clickable");

// Add click event listener to each clickable element in the Records section
recordClickableElements.forEach((element) => {
    element.addEventListener("click", () => {
        // Remove active class from all clickable elements in the Records section
        recordClickableElements.forEach((el) => {
            el.classList.remove("active");
        });

        // Add active class to the clicked element
        element.classList.add("active");

        const recordId = element.getAttribute("data-record");
        const recordDetails = document.getElementById(recordId + "Details");

        // Hide all record details in the Records section first
        const allRecordDetails = document.querySelectorAll(".record-details");
        allRecordDetails.forEach((detail) => {
            detail.style.display = "none";
        });

        // Show the record details for the clicked element
        if (recordDetails) {
            recordDetails.style.display = "block";
        }
    });
});

function openPopup(recordId) {
    const popup = document.getElementById(`search-pop-up-${recordId}`);
    popup.classList.add("open-pop-up");
}

function closePopup(recordId) {
    const popup = document.getElementById(`search-pop-up-${recordId}`);
    popup.classList.remove("open-pop-up");
}

