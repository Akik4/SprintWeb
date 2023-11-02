const memoryGame = document.querySelector("#gameboard");
const btns = document.querySelectorAll(".selectDifficulty");
const codingToken = document.querySelector(".codingToken");
var array = [];

function incremente(token) {
  let incr = new XMLHttpRequest();
  incr.open("POST", "../../utils/cdtoken.php", true);
  incr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  incr.onreadystatechange = function (response) {
    if(response.status == 201) {
      console.log('test')
    }
  };
  incr.send("token=" + token );
}

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
// generation des case
// generation des case
// generation des case
// generation des case





// delete case 
// delete case 
// delete case 
// delete case 
const deleteElement = () => {
  const element = document.querySelectorAll("#flip-card");
  for (let i = 0; i < element.length; i++) {
    memoryGame.removeChild(element[i]);
  }
};
// delete case 
// delete case 
// delete case 
// delete case 


const theo = document.querySelector(".timer");
const theo1 = document.querySelector(".timerMinute");
const event1 = document.querySelector(".timerStart1");
const lul = event1.addEventListener("click", () => {
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

btns.forEach((btn) => {
  btn.addEventListener("click", () => {
    if (btn.getAttribute("id") == "niveau1") {
      deleteElement();
      if(ifThemeChoose == true) {
      generate(4);
      game(2);
      }else{
        alert('choisi un theme par contre')
      }
      
    } else if (btn.getAttribute("id") == "niveau2") {
      deleteElement();
      if(ifThemeChoose == true) {

      generate(8);
      game(64);
      }else{
        alert('choisi un theme par contre')
      }
    } else if (btn.getAttribute("id") == "niveau3") {
      deleteElement();
      if(ifThemeChoose == true) {

      generate(12);
      game(144);
      }else{
        alert('choisi un theme par contre')
      }
    } else {
      deleteElement();
      generate(16);
      game();
    }
  });
});
const modalValue = document.querySelector(".modal-body");

function game(test123) {
  const event1 = document.querySelector(".timerStart1");
  timestarted = false;
  event1.addEventListener("click", ()=>{
    timestarted = true;
    myTimerFunction;
  });
  firstCard = false;
  secondCard = false;
  const flipCard = document.querySelectorAll("#flip-card");
// if(ifThemeChoose == true){
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
      for (let j = 0; j < 128; j++) {
        if (flipCard[j].classList.contains("matched")) {
          tableau.push(j);
          // problème si tableau supérieur à 16
          if (tableau.length == test123) {
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
                if(test123 == 16){
                  generate(4);
                  game(16);
                }else{
                  generate(8);
                  game(64);
                }
              });
            }, 1000);
            let timeValue = 0;
            if (myTimerFunction < 10) {
              incremente(10);
              scores();
            } else {
              incremente(6);
              scores();
            }
            modalValue.innerText = `Vous venez de gagner 10 points d'epxérience et 8 codingToken`;
          }
        }
      } // end
      } else {
      alert("non");
      }
    });
  });
// }else{
  // alert('veuillez choisir un theme svp')
// }
  
}


function scores() {
  let incr = new XMLHttpRequest();
  incr.open("POST", "../../utils/score.php", true);
  incr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  incr.onreadystatechange = function (response) {
    if (response.status == 201){
        console.log('Score enregistré');
      } else {
        console.error('Erreur d\'enregistrement du score');
      }
    }
  
  let k = parseInt(theo.innerText);
  incr.send("score=" +k + "&difficulty=3" );
}