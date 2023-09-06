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

const signInLink = document.getElementById("signInLink");
const ekisIcon = document.getElementById("ekis-icon");
const signContainer = document.querySelector(".sign-container");

signInLink.addEventListener("click", function (event) {
    event.preventDefault();
    toggleSignContainer();
});

ekisIcon.addEventListener("click", function (event) {
    event.preventDefault();
    toggleSignContainer();
});

function toggleSignContainer() {
    signContainer.classList.toggle("active");
}
