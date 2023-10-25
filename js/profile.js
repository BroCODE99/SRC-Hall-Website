const dashboardBtn = document.querySelector(".dashboard-btn");
const noticeBtn = document.querySelector(".notice-btn");
const settingsBtn = document.querySelector(".settings-btn");
const galleryBtn = document.querySelector(".gallery-btn");
//
const dashboardWrapper = document.querySelector(".dashboard");
const noticeWrapper = document.querySelector(".notice");
const settingsWrapper = document.querySelector(".settings");
const galleryWrapper = document.querySelector(".gallery");

dashboardBtn.addEventListener("click", () => {
  dashboardWrapper.classList.remove("inactive-page");
  dashboardBtn.classList.add("active-btn");
  noticeWrapper.classList.remove("active-page");
  noticeBtn.classList.remove("active-btn");
  settingsWrapper.classList.remove("active-page");
  settingsBtn.classList.remove("active-btn");
  galleryWrapper.classList.remove("active-page");
  galleryBtn.classList.remove("active-btn");
});

//
noticeBtn.addEventListener("click", () => {
  noticeWrapper.classList.add("active-page");
  noticeBtn.classList.add("active-btn");
  settingsWrapper.classList.remove("active-page");
  settingsBtn.classList.remove("active-btn");
  dashboardWrapper.classList.add("inactive-page");
  dashboardBtn.classList.remove("active-btn");
  galleryWrapper.classList.remove("active-page");
  galleryBtn.classList.remove("active-btn");
});

//
settingsBtn.addEventListener("click", () => {
  settingsWrapper.classList.add("active-page");
  settingsBtn.classList.add("active-btn");
  noticeWrapper.classList.remove("active-page");
  noticeBtn.classList.remove("active-btn");
  dashboardWrapper.classList.add("inactive-page");
  dashboardBtn.classList.remove("active-btn");
  galleryWrapper.classList.remove("active-page");
  galleryBtn.classList.remove("active-btn");
});

//
galleryBtn.addEventListener("click", () => {
  galleryWrapper.classList.add("active-page");
  galleryBtn.classList.add("active-btn");
  settingsWrapper.classList.remove("active-page");
  settingsBtn.classList.remove("active-btn");
  noticeWrapper.classList.remove("active-page");
  noticeBtn.classList.remove("active-btn");
  dashboardWrapper.classList.add("inactive-page");
  dashboardBtn.classList.remove("active-btn");
});
