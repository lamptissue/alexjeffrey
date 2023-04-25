// Modal
document.addEventListener("DOMContentLoaded", function () {
  let modalContainer = document.getElementById("modal-container");
  let closeBtn = document.getElementById("close-btn");
  let caseStudies = document.querySelectorAll(".content-container-modal");

  caseStudies.forEach((caseStudy) => {
    caseStudy.addEventListener("click", function () {
      let caseDetail = caseStudy.querySelector(".case-detail");
      let modalCaseDetail = document.getElementById("modal-case-detail");
      modalCaseDetail.innerHTML = caseDetail.innerHTML;
      modalContainer.style.display = "block";
    });
  });

  closeBtn.addEventListener("click", function () {
    modalContainer.style.display = "none";
  });

  window.addEventListener("click", function (e) {
    if (e.target === modalContainer) {
      modalContainer.style.display = "none";
    }
  });
});

// Burger Menu
document.addEventListener("DOMContentLoaded", function () {
  let burgerMenu = document.querySelector(".burger-menu");
  let mobileMenu = document.querySelector(".menu-right");
  let rightMenuLinks = document.querySelectorAll(".menu-right a");
  let overlay = document.querySelector(".overlay");
  let grid = document.querySelector(".grid");
  let branding = document.querySelector(".site-branding h1");

  burgerMenu.addEventListener("click", function () {
    mobileMenu.classList.toggle("show");
    burgerMenu.classList.toggle("open");
    overlay.classList.toggle("active");
    grid.style = "z-index: -1";
    branding.style = "z-index: 1";
  });

  window.addEventListener("click", function (e) {
    if (!burgerMenu.contains(e.target) && !mobileMenu.contains(e.target)) {
      mobileMenu.classList.remove("show");
      burgerMenu.classList.remove("open");
      overlay.classList.remove("active");
      grid.style = "z-index: 0";
      branding.style = "z-index: 10";
    }
  });

  rightMenuLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
      event.preventDefault();
      const targetUrl = event.target.href;

      mobileMenu.classList.remove("show");
      burgerMenu.classList.remove("open");
      overlay.classList.remove("active");

      //sets a delay on the menu when a menu item has been clicked - allows for clean page transition
      setTimeout(() => {
        window.location.href = targetUrl;
      }, 500);
    });
  });
});
