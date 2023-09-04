const hamburger = document.querySelector(".hamburger");
const navSections = document.querySelector(".nav-sections");
const navBar = document.querySelector(".navbar");
const colorGreenElements = document.querySelectorAll(".color-green");
const colorBlueElements = document.querySelectorAll(".color-blue");
const doctorsImage = document.querySelectorAll(".doctors-img");
const doctorsInfoGreen = document.querySelectorAll(".doctors-info-green");
const doctorsInfoBlue = document.querySelectorAll(".doctors-info-blue");


hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navSections.classList.toggle("active");
    navBar.classList.toggle("active");
});

colorGreenElements.forEach((element) => {
    element.addEventListener("click", () => {
        element.classList.toggle("active");
    });
});

colorBlueElements.forEach((element) => {
    element.addEventListener("click", () => {
        element.classList.toggle("active");
    });
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