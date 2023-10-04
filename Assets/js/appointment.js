function showSection(sectionId) {
    // Get all sections
    var sections = document.querySelectorAll('section');
  
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