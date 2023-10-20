document.addEventListener("DOMContentLoaded", () => {
  // animate elements i on scroll

  const quickFactHeader = document.querySelector(".quickFactHeader");
  const quickFactIcon = document.querySelectorAll(".icon");
  const quickFactNumber = document.querySelectorAll(".number");
  const quickFactTxt = document.querySelectorAll(".quickFactTxt");
  const showImageAndYearsOfOperation = document.querySelector(
    ".showImageAndYearsOfOperation"
  );
  const positiveMessage = document.querySelector(".positiveMessage");

  function isElementInViewport(element) {
    const rect = element.getBoundingClientRect();
    return rect.top <= window.innerHeight && rect.bottom >= 0;
  }

  function addFadeInClass(element) {
    element.classList.add("fadeIn");
  }

  function handleScroll() {
    if (isElementInViewport(quickFactHeader)) {
      addFadeInClass(quickFactHeader);
    }
    if (isElementInViewport(quickFactIcon[0])) {
      quickFactIcon.forEach((icon) => {
        addFadeInClass(icon);
      });
    }

    if (isElementInViewport(quickFactNumber[0])) {
      quickFactNumber.forEach((number) => {
        addFadeInClass(number);
      });
    }

    if (isElementInViewport(quickFactTxt[0])) {
      quickFactTxt.forEach((txt) => {
        addFadeInClass(txt);
      });
    }

    if (isElementInViewport(showImageAndYearsOfOperation)) {
      addFadeInClass(showImageAndYearsOfOperation);
    }

    if (isElementInViewport(positiveMessage)) {
      addFadeInClass(positiveMessage);
    }
  }

  window.addEventListener("scroll", handleScroll);
});
