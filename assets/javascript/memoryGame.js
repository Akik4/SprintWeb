const memoryGame = document.querySelector("#gameboard");
const btns = document.querySelectorAll(".dropdown-item");
const codingToken = document.querySelector(".codingToken");
var array = [];
// const btnThemeChoose = document.querySelectorAll('.themeChooes');
// btnThemeChoose.forEach((btnTheme) => {
//     btnTheme.addEventListener("click", () => {
//         btnTheme.classList.add('kiwi')
//         if (btnTheme.classList.contains('kiwi')) {
//           console.log('lskfbgipuslkrogibs tbs');
//           color = [
//               "case1Hal.png",
//               "case2Hal.png",
//               "case3Hal.png",
//               "case4Hal.png",
//               "case5Hal.png",
//               "case6Hal.png",
//               "case7Hal.png",
//               "case8Hal.png"
//           ]
//         }
//     });

// });

function placeA(text, size) {
  let tab = [];
  array.forEach(function get(subarray, index) {
    subarray.forEach(function subget(element, i) {
      if (element == 0) {
        tab.push(index + ";" + i);
      }
    });
  });

  let randint = Math.floor(Math.random() * tab.length);
  array[tab[randint].split(";")[0]][tab[randint].split(";")[1]] = text;
}

function generate(size) {
  array = [];
  for (let index = 0; index < size; index++) {
    array.push([]);
    for (let i = 0; i < size; i++) {
      array[index].push("0");
    }
  }
  let number = (size * size) / 2;
  for (let index = 0; index < number; index++) {
    let colorString = Math.floor(Math.random() * color.length);
    placeA(color[colorString], size);
    placeA(color[colorString], size);
  }
  display();
}

function display() {
  array.forEach((array) => {
    array.forEach((subarray) => {
      let truc = document.createElement("td");
      let truc1 = document.createElement("div");
      let truc2 = document.createElement("div");
      let truc3 = document.createElement("div");
      truc.id = "flip-card";
      truc.classList.add(subarray);
      truc1.id = "flip-card-inner";
      truc2.id = "cardFront";
      truc3.id = "cardBack";
      truc3.style.background = `url('../../../assets/img/${subarray}') center / cover no-repeat`;
      // truc3.className = subarray
      document.getElementById("gameboard").appendChild(truc);
      truc.appendChild(truc1);
      truc1.appendChild(truc2);
      truc1.appendChild(truc3);
    });
    document
      .getElementById("gameboard")
      .appendChild(document.createElement("tr"));
  });
}

const deleteElement = () => {
  const element = document.querySelectorAll("#flip-card");
  for (let i = 0; i < element.length; i++) {
    memoryGame.removeChild(element[i]);
  }
};
// const createElement = (valeur) => {
//     for (let i = 0; i < valeur; i++) {
//         let newCard = document.createElement("div");
//         newCard.id = "card";
//         memoryGame.appendChild(newCard);
//         for (let i = 0; i < valeur; i++) {
//             //innerHTML
//             let newCard2 = document.createElement("div");
//             let flipCard = document.createElement("div");
//             let cardFront = document.createElement("div");
//             let cardBack = document.createElement("div");
//             flipCard.id = "flip-card";
//             cardFront.id = "cardFront";
//             cardBack.id = "cardBack";
//             flipCard.classList.add(generateRandom(4));
//             cardBack.style.backgroundColor = flipCard.getAttribute("class");
//             newCard2.id = "Souscard";
//             newCard.appendChild(newCard2);
//             newCard2.appendChild(flipCard);
//             flipCard.appendChild(cardFront);
//             flipCard.appendChild(cardBack);
//         }
//     }
// }

const theo = document.querySelector(".timer");
const theo1 = document.querySelector(".timerMinute");
const event = document.querySelector(".timerStart1");
// intervalTime =  setInterval(timer, 1000);r

// function starTimer() {
//   if (!timestarted) {
//     setInterval(timer, 1000)
//     timestarted = true;
//   }
// }
const lul = event.addEventListener("click", () => {
  let time = 0;
  let timeMinutes = 0;

  myTimerFunction = setInterval(() => {
    theo.innerText = time;
    if (time == 59) {
      timeMinutes++;
      theo1.innerText = timeMinutes + ":";
      time = 0;
    } else {
      time++;
    }
    let k = theo.innerText;
    return k;
  }, 1000);

});
function deleteTime() {
  clearInterval(myTimerFunction);
}
// arreter le temps quand toutes les cartes seront retournées
btns.forEach((btn) => {
  btn.addEventListener("click", () => {
    if (btn.getAttribute("id") == "niveau1") {
      deleteElement();
      generate(4);
      game();
    } else if (btn.getAttribute("id") == "niveau2") {
      deleteElement();
      generate(8);
      game();
    } else if (btn.getAttribute("id") == "niveau3") {
      deleteElement();
      generate(12);
      game();
    } else {
      deleteElement();
      generate(16);
      game();
    }
  });
});
const modalValue = document.querySelector(".modal-body");

function game() {
  const event = document.querySelector(".timerStart1");
  timestarted = false;
  event.addEventListener("click", ()=>{
    timestarted = true;
    myTimerFunction;
  });
    // let time = 0;
    // let timeMinutes = 0;
    // myTimerFunction = setInterval(() => {
    //   theo.innerText = time;
    //   if (time == 59) {
    //     timeMinutes++;
    //     theo1.innerText = timeMinutes + ":";
    //     time = 0;
    //   } else {
    //     time++;
    //   }
    //   let k = theo.innerText;
    //   return k;
    // }, 1000);
  const sousCards = document.querySelectorAll("#Souscard");
  const flipCard = document.querySelectorAll("#flip-card");
  const cardBackColor = document.querySelectorAll("#cardBack");
  firstCard = false;
  secondCard = false;
  flipCard.forEach((miniCard) => {
    
    miniCard.addEventListener("click", () => {
     
      if (timestarted == true) {
      if (!miniCard.classList.contains("matched")) {
        miniCard.style.transform = "rotateY(180deg)";
        if (!firstCard) {
          firstCard = miniCard;
          firstCardValue = miniCard.getAttribute("class");
          console.log(firstCardValue);
        } else {
          secondCard = miniCard;
          secondCardValue = miniCard.getAttribute("class");
          console.log(secondCardValue);
          if (firstCardValue == secondCardValue) {
            firstCard.classList.add("matched");
            secondCard.classList.add("matched");
            firstCard = false;
          } else {
            setTimeout(() => {
              firstCard.style.transform = "rotateY(0deg)";
              secondCard.style.transform = "rotateY(0deg)";
            }, 700);
            setTimeout(() => {
              firstCard = false;
              secondCard = false;
            }, 710);
          }
        }
      }
      // start
      let tableau = [];
      console.log(tableau);
      for (let j = 0; j < 128; j++) {
        if (flipCard[j].classList.contains("matched")) {
          tableau.push(j);
          // problème si tableau supérieur à 16
          if (tableau.length == 16) {
            clearInterval(myTimerFunction);
            setTimeout(() => {
              memoryGame.innerHTML = `<button type="button" class="codingTokenWin btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                          Points Gagner
                        </button>
                        <button type="button" class="btnRestart btn btn-primary ">Rejouer</button>`;
              const btnRestart = document.querySelector(".btnRestart");
              const codingTokenWin = document.querySelector(".codingTokenWin");
              btnRestart.addEventListener("click", () => {
                btnRestart.style.display = "none";
                codingTokenWin.style.display = "none";
                generate(4);
                game();
              });
            }, 1000);
            let timeValue = 0;
            if (myTimerFunction < 10) {
              timeValue = 24;
            } else {
              timeValue = 5;
            }

            // let codingTokens = 0;
            // codingTokens += timeValue;
            // console.log(codingTokens);
            codingToken.innerText = timeValue;
            modalValue.innerText = `Vous venez de gagner 10 points d'epxérience et ${timeValue} codingToken`;
          }
        }
      } // end
      } else {
      alert("non");
      }
    });
  });
  // const flipCard = document.querySelectorAll("#flip-card");
}
