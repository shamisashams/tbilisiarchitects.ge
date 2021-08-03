const navbar = document.querySelector(".navbar");
const menuBar = document.querySelector(".menu_bar");

menuBar.addEventListener("click", () => {
    navbar.classList.toggle("open");
    menuBar.classList.toggle("clicked");
});
