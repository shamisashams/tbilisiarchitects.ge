const heroSlide = document.querySelectorAll(".hero_slide");
const slider = document.getElementById("slider_on_hero");
const sliderDot = document.getElementById("dot_on_sliders");
const currentSlide = document.getElementsByClassName("current");
const prevSlide = document.getElementById("prev_slide");
const nextSlide = document.getElementById("next_slide");
const heroDot = document.querySelectorAll(".hero_dot");
const clickedDot = document.getElementsByClassName("clicked");

let slideNumber = 0;
let dotNumber = 0;

//  hero slider dots

heroDot.forEach((el, i) => {
    el.addEventListener("click", () => {
        heroDot.forEach((el) => {
            el.classList.remove("clicked");
        });
        heroSlide.forEach((el) => {
            el.classList.remove("current");
        });

        heroDot[i].classList.add("clicked");
        heroSlide[i].classList.add("current");
    });
});

//  hero slider

const goPrevSlide = () => {
    currentSlide[0].classList.remove("current");
    clickedDot[0].classList.remove("clicked");
    if ((slideNumber == 0, dotNumber == 0)) {
        slideNumber = heroSlide.length - 1;
        dotNumber = heroDot.length - 1;
    } else {
        slideNumber = slideNumber - 1;
        dotNumber = dotNumber - 1;
    }
    heroSlide[slideNumber].classList.add("current");
    heroDot[dotNumber].classList.add("clicked");
};

const goNextSlide = () => {
    currentSlide[0].classList.remove("current");
    clickedDot[0].classList.remove("clicked");
    if ((slideNumber == heroSlide.length - 1, dotNumber == heroDot.length - 1)) {
        slideNumber = 0;
        dotNumber = 0;
    } else {
        slideNumber = slideNumber + 1;
        dotNumber = dotNumber + 1;
    }
    heroSlide[slideNumber].classList.add("current");
    heroDot[dotNumber].classList.add("clicked");
};
if ((prevSlide, nextSlide)) {
    prevSlide.addEventListener("click", function () {
        goPrevSlide();
    });
    nextSlide.addEventListener("click", function () {
        goNextSlide();
    });
}
