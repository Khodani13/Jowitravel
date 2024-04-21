//  for menu
const menu = document.querySelector(".menu");
const hamMenuIcon = document.querySelector(".ham-menu-icon");
let i = true;
hamMenuIcon.addEventListener("click", (e) => {
  if (i) {
    menu.style.display = "flex";
    e.target.classList.remove("bi-list"); //e.target = icon
    e.target.classList.add("bi-x-lg");
    i = false;
  } else {
    e.target.classList.remove("bi-x-lg");
    e.target.classList.add("bi-list"); //e.target = icon
    menu.style.display = "none";
    i = true;
  }
});
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});
window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  if (window.scrollY > 0) {
    header.classList.add("floating-header");
  } else {
    header.classList.remove("floating-header");
  }
});
// for select
