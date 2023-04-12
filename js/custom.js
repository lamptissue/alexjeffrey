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
