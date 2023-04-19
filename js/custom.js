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

  // Add this event listener for each link in the right menu
  rightMenuLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
      event.preventDefault(); // Prevent the default link behavior
      const targetUrl = event.target.href; // Store the target URL

      mobileMenu.classList.remove("show");
      burgerMenu.classList.remove("open");
      overlay.classList.remove("active");

      // Set a delay before the page is redirected
      setTimeout(() => {
        window.location.href = targetUrl; // Redirect to the target URL
      }, 500); // Adjust the delay time (in milliseconds) as needed
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  barba.init({
    transitions: [
      {
        leave(data) {
          return gsap.to(data.current.container, {
            opacity: 0,
          });
        },
        enter(data) {
          return gsap.from(data.next.container, {
            opacity: 0,
          });
        },
      },
    ],
  });
});
