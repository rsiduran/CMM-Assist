const hamburger = document.querySelector(".hamburger");
const sidebarSections = document.querySelector(".middle");
const sideBar = document.querySelector(".sidebar");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    sidebarSections.classList.toggle("active");
    sideBar.classList.toggle("active");
});

document.querySelectorAll(".sidebar-section").forEach(n => n.addEventListener("click", () => {
hamburger.classList.remove("active");
sidebarSections.classList.remove("active");
}));

document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".sidebar-section");

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