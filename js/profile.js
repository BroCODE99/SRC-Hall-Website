const dashboardBtn = document.querySelector(".dashboard-btn");
const noticeBtn = document.querySelector(".notice-btn");
const settingsBtn = document.querySelector(".settings-btn");
const galleryBtn = document.querySelector(".gallery-btn");
//
const dashboardWrapper = document.querySelector(".dashboard");
const noticeWrapper = document.querySelector(".notice");
const settingsWrapper = document.querySelector(".settings");
const galleryWrapper = document.querySelector(".gallery");

//

// noticeWrapper.addEventListener("click", () => {
//   noticeBtn.classList.add("active-btn");
//   dashboardBtn.classList.remove("active-btn");
// });

//
//
//
//
const addBtn = document.querySelector(".add-btn");
const createItemWrapper = document.querySelector(".create-item-wrapper");
const messageWrapper = document.querySelector(".message-wrapper");
//
addBtn.addEventListener("click", () => {
  createItemWrapper.classList.toggle("create-wrapper-active");
});
//

//

//
const delBtn = document.querySelectorAll(".del-btn");
let cancelBtn = document.querySelector(".cancel-btn");
let confirmWrapper = document.querySelector(".confirm-wrapper");
let valueIid = document.querySelectorAll(".value_id");

delBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    confirmWrapper.classList.add("confirm-wrapper-active");
    valueIid.forEach((id) => {
      id.value = btn.value;
    });
  });
});

//

cancelBtn.addEventListener("click", () => {
  confirmWrapper.classList.remove("confirm-wrapper-active");
});

//

// // notification
// let successText = document.querySelector(".success-text");
// let errorText = document.querySelector(".error-text");

// let queryStrings = window.location.search;
// let urlParams = new URLSearchParams(queryStrings);

// //
// if (urlParams.get("error")) {
//   errorText.classList.add("error-text-active");

//   //
// } else if (urlParams.get("success")) {
//   successText.classList.add("success-text-active");
// }
