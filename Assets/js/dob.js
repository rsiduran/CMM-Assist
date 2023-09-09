function validateDate() {
    const dobInput = document.getElementById('dob');
    const dobError = document.getElementById('dob-error');
    const selectedDate = new Date(dobInput.value);

    if (isNaN(selectedDate)) {
        dobError.textContent = 'Please enter a valid date in mm/dd/yyyy format.';
    } else {
        dobError.textContent = '';

        // You can access the selected date as selectedDate variable and perform further validation or processing.
        console.log('Selected Date:', selectedDate);
    }
}