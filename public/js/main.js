"use strict";

// variables
let darkThemeIcon = document.querySelector(".fa-moon");
let lightThemeIcon = document.querySelector(".fa-sun");
let body = document.querySelector("body");

darkThemeIcon.addEventListener("click", ()=> {
    localStorage.setItem('dark-theme-orena', true);
    body.classList.add("dark");
    darkThemeIcon.classList.add("none-dsp");
    lightThemeIcon.classList.remove("none-dsp");
});
lightThemeIcon.addEventListener("click", ()=> {
    localStorage.setItem('dark-theme-orena', false);
    body.classList.remove("dark");
    darkThemeIcon.classList.remove("none-dsp");
    lightThemeIcon.classList.add("none-dsp");
});

window.addEventListener("load", ()=> {
    let isDarkAvailable = localStorage.getItem('dark-theme-orena');
    if(isDarkAvailable === 'true'){
        darkThemeIcon.classList.add("none-dsp");
        lightThemeIcon.classList.remove("none-dsp");
        body.classList.add("dark");
    } else {
        darkThemeIcon.classList.remove("none-dsp");
        lightThemeIcon.classList.add("none-dsp");
        body.classList.remove("dark");
    }
});
