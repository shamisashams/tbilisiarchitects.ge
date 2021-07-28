const projectFilter = document.querySelectorAll(".project_filter");
const projectTab = document.querySelectorAll(".project_grid_tab");
const popUpMainImg = document.querySelectorAll(".popup_main_img");
const imgOption = document.querySelectorAll(".img_options");
const projectViewPP = document.querySelectorAll(".project_view_pp");
const popUp = document.querySelectorAll(".project_popup");
const closePopUp = document.querySelectorAll(".close_popup");
const timeLineEvent = document.querySelectorAll(".timeline_event");
const yearPinTimeline = document.querySelectorAll(".year_pin_timeline");
const historyDropdown = document.querySelectorAll(".the_history_dropdown");
const navbar = document.querySelector(".navbar");
const burgerMenu = document.querySelector(".burger_menu");
const moreOptions = document.querySelectorAll(".show_more_options");
const lessOptions = document.querySelectorAll(".hide_extra_options");
const extraOnes = document.querySelectorAll(".extra_cat_options");
const darkLightMode = document.querySelector(".dark_light_mode_btn");
const dLImg = document.querySelectorAll(".dark_light_img");
const openHnh = document.querySelectorAll(".open_hnh_popup");
const HnhPopup = document.getElementById("hnh_popup");
const closeHnh = document.querySelectorAll("#close_hnh_popup");

const darkMode = getCookie('dark-mode');
if (darkMode) {
    document.body.classList.toggle("dark_mode");
    dLImg.forEach((el) => {
        el.classList.toggle("active");
    });
}

// project filter

projectFilter.forEach((el, i) => {
    el.addEventListener("click", () => {
        projectFilter.forEach((el) => {
            el.classList.remove("active");
        });
        projectTab.forEach((el) => {
            el.classList.remove("active");
        });

        projectFilter[i].classList.add("active");
        projectTab[i].classList.add("active");
    });
});

// product popup

imgOption.forEach((el, i) => {
    el.addEventListener("click", () => {
        imgOption.forEach((el) => {
            el.classList.remove("active");
        });
        popUpMainImg.forEach((el) => {
            el.classList.remove("active");
        });

        imgOption[i].classList.add("active");
        popUpMainImg[i].classList.add("active");
    });
});

// open popup

projectViewPP.forEach((el, i) => {
    el.addEventListener("click", () => {
        popUp[i].classList.add("open");
    });
});

if (closePopUp) {
    closePopUp.forEach((el) => {
        el.addEventListener("click", () => {
            popUp.forEach((el) => {
                el.classList.remove("open");
            });
        });
    });
}

// timeline

timeLineEvent.forEach((el, i) => {
    el.addEventListener("click", () => {
        historyDropdown.forEach((el) => {
            el.classList.remove("opened");
        });
        yearPinTimeline.forEach((el) => {
            el.classList.remove("clicked");
        });
        historyDropdown[i].classList.toggle("opened");
        yearPinTimeline[i].classList.toggle("clicked");
    });
});

//  mobile menu

burgerMenu.addEventListener("click", () => {
    navbar.classList.toggle("out");
});

// options on catalog

moreOptions.forEach((el, i) => {
    el.addEventListener("click", () => {
        extraOnes[i].classList.add("show");
        moreOptions[i].classList.add("hide");
    });
});
lessOptions.forEach((el, i) => {
    el.addEventListener("click", () => {
        extraOnes[i].classList.remove("show");
        moreOptions[i].classList.remove("hide");
    });
});

// dark mode toggle

darkLightMode.addEventListener("click", () => {
    document.body.classList.toggle("dark_mode");
    let darkMode = getCookie('dark-mode')
    setCookie('dark-mode', !darkMode, 7);
});
dLImg.forEach((el) => {
    el.addEventListener("click", (event) => {
        dLImg.forEach((el) => {
            el.classList.toggle("active");
        });
    });
});

// H&H popup
openHnh.forEach((el) => {
    el.addEventListener("click", () => {
        let popup = document.querySelector(`.hnh_popup-${el.id}`);
        popup.classList.add("open");
    });
});
closeHnh.forEach(item => {
    item.addEventListener("click", () => {
        if (item.getAttribute('data-id')) {
            let popup = document.querySelector(`.hnh_popup-${item.getAttribute('data-id')}`);
            popup.classList.remove("open");
        }
    });
})

function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
