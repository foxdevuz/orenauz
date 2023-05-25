"use strict";
// variables
let darkThemeIcon = document.querySelector(".fa-moon");
let lightThemeIcon = document.querySelector(".fa-sun");
let offcanvasBody = document.querySelector(".offcanvas-body");
let offcanvasHeader = document.querySelector(".offcanvas-header");
let offcanvasNavItem = document.querySelectorAll(".offcanvas-nav-item");
let searchForm = document.querySelector(".searchForm");
let closeSearchForm = document.querySelector(".closeSearchForm");
let searchIcon = document.querySelector("#searchicon");
let body = document.querySelector("body");
searchIcon.addEventListener("click", ()=>{
    searchForm.classList.add('searchFormShow');
    body.classList.add('stopScroll');
});
closeSearchForm.addEventListener('click', ()=>{
    searchForm.classList.remove('searchFormShow');
    body.classList.remove('stopScroll');
})



darkThemeIcon.addEventListener("click", ()=> {
    localStorage.setItem('dark-theme-orena', true);
    body.classList.add("dark");
    offcanvasBody.classList.add("bg-dark");
    offcanvasBody.classList.add("text-light");
    offcanvasHeader.classList.add("bg-dark");
    offcanvasHeader.classList.add("text-light");
    darkThemeIcon.classList.add("none-dsp");
    lightThemeIcon.classList.remove("none-dsp");
    for (let i = 0; i < offcanvasNavItem.length; i++) {
        offcanvasNavItem[i].classList.add("text-light")
    }
    for (let i = 0; i < offcanvasNavItem.length; i++) {
        offcanvasNavItem[i].classList.remove("text-dark")
    }
});
lightThemeIcon.addEventListener("click", ()=> {
    localStorage.setItem('dark-theme-orena', false);
    body.classList.remove("dark");
    offcanvasBody.classList.remove("bg-dark");
    offcanvasBody.classList.remove("text-light");
    offcanvasHeader.classList.remove("bg-dark");
    offcanvasHeader.classList.remove("text-light");
    darkThemeIcon.classList.remove("none-dsp");
    lightThemeIcon.classList.add("none-dsp");
    for (let i = 0; i < offcanvasNavItem.length; i++) {
        offcanvasNavItem[i].classList.add("text-dark")
    }
    for (let i = 0; i < offcanvasNavItem.length; i++) {
        offcanvasNavItem[i].classList.remove("text-light")
    }
});

window.addEventListener("load", ()=> {
    let isDarkAvailable = localStorage.getItem('dark-theme-orena');
    if(isDarkAvailable === 'true'){
        darkThemeIcon.classList.add("none-dsp");
        lightThemeIcon.classList.remove("none-dsp");
        body.classList.add("dark");
        offcanvasBody.classList.add("bg-dark");
        offcanvasBody.classList.add("text-light");
        offcanvasHeader.classList.add("bg-dark");
        offcanvasHeader.classList.add("text-light");
        for (let i = 0; i < offcanvasNavItem.length; i++) {
            offcanvasNavItem[i].classList.add("text-light")
        }
        for (let i = 0; i < offcanvasNavItem.length; i++) {
            offcanvasNavItem[i].classList.remove("text-dark")
        }
    } else {
        darkThemeIcon.classList.remove("none-dsp");
        lightThemeIcon.classList.add("none-dsp");
        body.classList.remove("dark");
        for (let i = 0; i < offcanvasNavItem.length; i++) {
            offcanvasNavItem[i].classList.add("text-dark")
        }
        for (let i = 0; i < offcanvasNavItem.length; i++) {
            offcanvasNavItem[i].classList.remove("text-light")
        }
    }
});
// swipper
let swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
