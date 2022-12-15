const navbar = document.querySelector(".navbar");
const menuBar = document.querySelector(".menu_bar");
const filterBtn = document.querySelector(".filterBtn");
const projectTabs = document.querySelector(".projectTabs");
const closeProjectTabs = document.querySelector(".closeProjectTabs");
const projectTabBtns = document.querySelectorAll(".projectTabBtn");
const projectContents = document.querySelectorAll(".projectContent");

menuBar.addEventListener("click", () => {
    navbar.classList.toggle("open");
    menuBar.classList.toggle("clicked");
});

projectTabBtns.forEach((el, i) => {
    el.addEventListener("click", () => {
        projectTabBtns.forEach((el) => {
            el.classList.remove("active");
        });
        projectContents.forEach((el) => {
            el.classList.remove("active");
        });
        projectTabBtns[i].classList.add("active");
        projectContents[i].classList.add("active");
    });
});

filterBtn.addEventListener("click", () => {
    projectTabs.classList.toggle("show");
});
closeProjectTabs.addEventListener("click", () => {
    projectTabs.classList.remove("show");
});
