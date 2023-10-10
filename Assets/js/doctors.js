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
