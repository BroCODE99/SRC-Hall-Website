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
