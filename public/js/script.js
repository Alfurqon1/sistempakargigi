//navbar fixed
window.onscroll = function () {
  const header = document.querySelector("header");
  const fixedNav = header.offsetTop;

  if (window.pageYOffset > fixedNav) {
    header.classList.add("navbar-fixed");
  } else {
    header.classList.remove("navbar-fixed");
  }
};

const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
  hamburger.classList.toggle("hamburger-active");
  navMenu.classList.toggle("hidden");
});

const accordionHeader = document.querySelector("#accordion_header");
const accordionBody = document.querySelector("#accordion_body");

accordionHeader.addEventListener("click", function () {
  accordionHeader.classList.toggle("accordion_active");
  accordionBody.classList.toggle("hidden");
});

const accordionHeader2 = document.querySelector("#accordion_header2");
const accordionBody2 = document.querySelector("#accordion_body2");

accordionHeader2.addEventListener("click", function () {
  accordionHeader2.classList.toggle("accordion_active");
  accordionBody2.classList.toggle("hidden");
});

const accordionHeader3 = document.querySelector("#accordion_header3");
const accordionBody3 = document.querySelector("#accordion_body3");

accordionHeader3.addEventListener("click", function () {
  accordionHeader3.classList.toggle("accordion_active");
  accordionBody3.classList.toggle("hidden");
});
