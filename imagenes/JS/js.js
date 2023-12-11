// get all elements here now
const navMenuClose = document.getElementById("menu-close");
const sideMenuClose = document.getElementById("sidebar-close");
const links = document.querySelector("header .navbar .navbar-links");
const menuLi = document.querySelectorAll(
  "header .navbar .navbar-links .links > li"
);
const submenu = document.querySelectorAll(
  "header .navbar .navbar-links .links li ul > li"
);

navMenuClose.addEventListener("click", () => {
  links.style.left = "0";
});

sideMenuClose.addEventListener("click", () => {
  links.style.left = "-100%";
});

document.addEventListener("click", (event) => {
  if (!links.contains(event.target) && !navMenuClose.contains(event.target)) {
    links.style.left = "-100%";
  }
});

menuLi.forEach((item) => {
  item.addEventListener("click", (e) => {
    menuLi.forEach((li) => {
      li.classList.remove("active");
    });

    e.currentTarget.classList.toggle("active");
  });
});

submenu.forEach((item) => {
  item.addEventListener("click", (e) => {
    e.currentTarget.classList.toggle("show-menu");
  });
});

const navbar = document.querySelector("header");
const topMenu = document.querySelector(".top-menu");

window.addEventListener("scroll", () => {
  const scrollHeight = window.scrollY;
  const navbarHeight = navbar.getBoundingClientRect().height;

  if (scrollHeight > navbarHeight) {
    navbar.classList.add("nav-fix");
  } else {
    navbar.classList.remove("nav-fix");
  }

  console.log(scrollHeight);

  if (scrollHeight > 200) {
    topMenu.classList.add("show-btn");
  } else {
    topMenu.classList.remove("show-btn");
  }
});

topMenu.addEventListener("click", () => {
  document.documentElement.scrollTop = 0;
});
