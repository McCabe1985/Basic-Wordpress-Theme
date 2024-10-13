//selectors, elements of the Dom we need to grab

const appContainer = document.querySelector(".app-container");
const navToggler = document.querySelector(".mobile-navbar-toggle");
const closeButton = document.querySelector(".close-nav-button");
const openButton = document.querySelector(".open-nav-button");

//defines the mobile nav menu
let mobileNav = document.createElement("nav");
mobileNav.classList.add("mobile-nav-container");
mobileNav.innerHTML = `
  <a class="mobile-nav-link">Link</a>
  <a class="mobile-nav-link">Link</a>
  <a class="mobile-nav-link">Link</a>
  <a class="mobile-nav-link">Link</a>
  `;

//toggles the navbar open and closed, changes the button from a hamburger to an x and back again
navToggler.addEventListener("click", () => {
  closeButton.classList.toggle("disappear");
  openButton.classList.toggle("disappear");

  // add or remove the mobile nav menu from the dom
  if (appContainer.contains(mobileNav)) {
    appContainer.removeChild(mobileNav);
  } else {
    appContainer.appendChild(mobileNav);
  }
});
