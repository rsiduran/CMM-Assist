const hamburger = document.querySelector(".hamburger");
const navSections = document.querySelector(".nav-sections");
const navBar = document.querySelector(".navbar");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navSections.classList.toggle("active");
    navBar.classList.toggle("active");
});

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
hamburger.classList.remove("active");
navSections.classList.remove("active");
}));

document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach(function (link) {
        link.addEventListener("click", function (e) {
            e.preventDefault();

            const targetId = this.getAttribute("href").substring(1); // Remove the "#" symbol
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                });
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const signInLink = document.getElementById("signInLink");
    const signInPopUp = document.getElementById("signInPopUp");
    const ekisIcon = document.getElementById("ekis-icon");

    signInLink.addEventListener("click", function (event) {
        event.preventDefault(); 

       
        if (signInPopUp.style.transform === "translate(-50%, -50%)") {
            signInPopUp.style.opacity = 0;
            signInPopUp.style.transform = "translate(-50%, -150%)"; 
            setTimeout(() => {
                signInPopUp.style.display = "none";
            }, 300); 
        } else {
            signInPopUp.style.display = "block";
            setTimeout(() => {
                signInPopUp.style.opacity = 1;
                signInPopUp.style.transform = "translate(-50%, -50%)"; 
            }, 10); 
        }
    });

    ekisIcon.addEventListener("click", function () {
        signInPopUp.style.opacity = 0;
        signInPopUp.style.transform = "translate(-50%, -150%)";
        setTimeout(() => {
            signInPopUp.style.display = "none";
        }, 300);
    });
});


const loginForm = document.getElementById("login-form");
const usernameInput = document.getElementById("username");
const passwordInput = document.getElementById("password");
const errorMessage = document.getElementById("error-message");

loginForm.addEventListener("submit", function (e) {
  e.preventDefault();

  const enteredUsername = usernameInput.value;
  const enteredPassword = passwordInput.value;

  if (enteredUsername === "admin" && enteredPassword === "admin") {
    window.location.href = "../../pages/admin.html";
  } else {
    errorMessage.textContent = "Invalid username or password. Try again.";
    usernameInput.value = "";
    passwordInput.value = "";
  }
});

