const hamburger = document.querySelector(".hamburger");
const sidebarSections = document.querySelector(".sidebar-section");
const sideBar = document.querySelector(".sidebar");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    sidebarSections.classList.toggle("active");
    sideBar.classList.toggle("active");
});

document.querySelectorAll(".side-link").forEach(n => n.addEventListener("click", () => {
hamburger.classList.remove("active");
sidebarSections.classList.remove("active");
}));

document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".side-link");

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