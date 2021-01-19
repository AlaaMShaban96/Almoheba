const header = document.querySelector(".header");
const navi = document.querySelector(".borderline");
const btnNavi = document.querySelector(".hamburger-menu");
const navi_list = document.querySelector(".navigation__list");
const flexIt = document.querySelector(".flex-it");
const rightArrow = document.querySelector(".arrow-right");
const leftArrow = document.querySelector(".arrow-left");
const smoothLink = document.querySelector(".smooth-link");

const options = { rootMargin: "-500px 0px 0px 0px" };

// nav sticky effect
const observer = new IntersectionObserver(function (entries, observer) {
  entries.forEach((entry) => {
    if (!entry.isIntersecting) {
      navi.classList.add("nav-sticky");
      document.querySelector(".navigation__list").classList.add("u-color-dark");
      document.querySelector(".logo-white").classList.add("u-hidden");
      document.querySelector(".logo-black").classList.remove("u-hidden");
      document.querySelector(".borderline").classList.add("position-fixed");
    } else {
      navi.classList.remove("nav-sticky");
      document
        .querySelector(".navigation__list")
        .classList.remove("u-color-dark");
      document.querySelector(".logo-white").classList.remove("u-hidden");
      document.querySelector(".logo-black").classList.add("u-hidden");
      document.querySelector(".borderline").classList.remove("position-fixed");
    }
  });
}, options);

observer.observe(header);

//Loading Effects , this fucntion takes care of the loading phases of the app
window.addEventListener("load", function () {
  const preloader = document.querySelector(".preloader");
  preloader.classList.add("u-finish-him");
});

//Clicking action on the hamburger menu
btnNavi.addEventListener("click", function () {
  if (!navi_list.classList.contains("navi-full")) {
    navi_list.classList.add("navi-full");
    flexIt.classList.add("titan");
    document.querySelector(".icon--top").classList.add("u-rotate--1");
    document.querySelector(".icon--mid").classList.add("u-transparent");
    document.querySelector(".icon--bottom").classList.add("u-rotate--2");
  } else {
    navi_list.classList.remove("navi-full");
    flexIt.classList.remove("titan");
    document.querySelector(".icon--top").classList.remove("u-rotate--1");
    document.querySelector(".icon--mid").classList.remove("u-transparent");
    document.querySelector(".icon--bottom").classList.remove("u-rotate--2");
  }
});

rightArrow.addEventListener("click", changeBackground);
leftArrow.addEventListener("click", changeBackground);

function changeBackground() {
  document.querySelector(".circle--1").classList.toggle("active");
  document.querySelector(".circle--2").classList.toggle("active");
  if (header.classList.contains("background--1")) {
    console.log("Clicked");
    header.classList.remove("background--1");
    header.classList.add("background--2");
  } else {
    console.log("Clicked else ");
    header.classList.remove("background--2");
    header.classList.add("background--1");
  }
}
