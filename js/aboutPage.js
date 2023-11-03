document.addEventListener("DOMContentLoaded", () => {

// 
  const missionStatementBtn = document.querySelector('.missionStatement');
  const readLess = document.querySelector('.readLess');
  const hiddenClass = document.querySelector('.hidden');

  missionStatementBtn.onclick = () =>{
    hiddenClass.classList.add('displayHiddenClass');
    readLess.classList.add('displayHiddenClass');
    missionStatementBtn.classList.add('hideDisplayMission');
  }

  readLess.onclick = () =>{
    hiddenClass.classList.remove('displayHiddenClass');
    readLess.classList.remove('displayHiddenClass');
    missionStatementBtn.classList.remove('hideDisplayMission');
  }

  // getting current year and years of operation of the src hall

  const operatingYears = document.querySelector(".operatingYears");
  const currentYearSec = document.querySelector(".currentYearSec");

  function getCurrentYear() {
    return new Date().getFullYear();
  }

  currentYearSec.innerHTML = getCurrentYear();

  const operatedYears = getCurrentYear() - 1971;

  operatingYears.innerHTML = operatedYears;

     // toggle the display of the message card
  const positiveMessageBtn = document.querySelector(".positiveMessageBtn");
  const messageCard = document.querySelector(".message");
  const closeCallingBtn = document.querySelector('.closeCalling');
  const messageOverlay = document.querySelector('.messageOverlay');


  positiveMessageBtn.addEventListener('click', () =>{
    messageCard.classList.add('displaymessage');
    messageOverlay.classList.add('displaymessage');
  });

closeCallingBtn.onclick = () =>{
  messageOverlay.classList.remove('displaymessage');
  messageCard.classList.remove('displaymessage');
}
messageOverlay.onclick = () =>{
  messageCard.classList.remove('displaymessage');
  messageOverlay.classList.remove('displaymessage');
}


});

