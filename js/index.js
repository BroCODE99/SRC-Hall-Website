// --------------------------------
const sideBarOpenBtn = document.querySelector(".sidebar-btn");
const sideBarWrapper = document.querySelector(".sidebar-wrapper");
const sidebarCloseBtn = document.querySelector(".sidebar-close-btn");
// ----------------------------------------------

// -----------------------------------------
sideBarOpenBtn.addEventListener("click", () => {
  sideBarWrapper.classList.add("sidebar-wrapper-open");
});

// ---------------------------------
sidebarCloseBtn.addEventListener("click", () => {
  sideBarWrapper.classList.remove("sidebar-wrapper-open");
});

//
const photoCard = document.querySelectorAll(".photo-card");
const viewPhoto = document.querySelector(".view-photo");
let viewPhotoImg = document.querySelector(".view-photo img");
const closePhotoBtn = document.querySelector(".close-photo-btn");

photoCard.forEach((card) => {
  card.addEventListener("click", () => {
    card.classList.add("view-photo-active");
    closePhotoBtn.classList.add("close-photo-btn-active");
  });
});

closePhotoBtn.addEventListener("click", () => {
  photoCard.forEach((card) => {
    card.classList.remove("view-photo-active");
  });
  closePhotoBtn.classList.remove("close-photo-btn-active");
});
