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


  positiveMessageBtn.addEventListener('click', () =>{
    messageCard.classList.add('displaymessage');
  });

closeCallingBtn.onclick = () =>{
  messageCard.classList.remove('displaymessage');
}


  // toggle the display of history section
  const showMoreHistory = document.querySelector('.showMoreHistory');
  const briefHistory = document.querySelector('.briefHistory');
  const hallHistory = document.querySelector('.hallHistory');
  const closeHistory = document.querySelector('.closeHistory');

  showMoreHistory.addEventListener('click', () =>{
    briefHistory.classList.add('hideElement');
    hallHistory.classList.add('displayHistory');
  })

  closeHistory.onclick = () =>{
    briefHistory.classList.remove('hideElement');
    hallHistory.classList.remove('displayHistory');
  }



});



//   showMoreHistory.onclick  = () =>{
//     briefHistory.classList.toggle('hideElement');
//     hallHistory.classList.toggle('displayHistory');
//   }
//   closeHistory.onclick = () =>{
//     briefHistory.classList.remove('hideElement');
//     hallHistory.classList.remove('displayHistory');
//   }

// });
