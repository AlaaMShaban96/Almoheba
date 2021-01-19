const header = document.querySelector(".header");
const navi = document.querySelector(".borderline");
const btnNavi = document.querySelector(".hamburger-menu");
const navi_list = document.querySelector(".navigation__list");
const flexIt = document.querySelector(".flex-it");
const rightArrow = document.querySelector(".arrow-right");
const leftArrow = document.querySelector(".arrow-left");

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
