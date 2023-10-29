const card = document.querySelector(".card");
const btn = document.querySelector(".click");
const btn2 = document.querySelector(".click2");
const memoryGame = document.querySelector(".memoryGame");

const imgArray = [
  "red",
  "gray",
  "orange",
  "yellow",
  "green",
  "blue",
  "pink",
  "purple",
];
// a revoir la  fonction random
const generateRandom = (size = 4) => {
  // let tempArray = [...imgArray];
  let cardValues = "";
  size = (size * size) / 2;
  for (let i = 0; i < size; i++) {
    const randomIndex = Math.floor(Math.random() * imgArray.length);
    cardValues = imgArray[randomIndex];
  }
  return cardValues;
};
console.log(generateRandom(4));
for (let i = 0; i < 4; i++) {
  let newCard = document.createElement("div");
  newCard.id = "card";
  memoryGame.appendChild(newCard);
  for (let i = 0; i < 4; i++) {
    //innerHTML
    let newCard2 = document.createElement("div");
    let flipCard = document.createElement("div");
    let cardFront = document.createElement("div");
    let cardBack = document.createElement("div");
    flipCard.id = "flip-card";
    cardFront.id = "cardFront";
    cardBack.id = "cardBack";
    flipCard.classList.add(generateRandom(4));
    cardBack.style.backgroundColor = flipCard.getAttribute("class");
    newCard2.id = "Souscard";
    newCard.appendChild(newCard2);
    newCard2.appendChild(flipCard);
    flipCard.appendChild(cardFront);
    flipCard.appendChild(cardBack);
  }
}

// console.log(imgArray);
// for (let i = 0; i < imgArray.length; i++) {
//   let random = Math.floor(Math.random() * imgArray.length);
//   imgArray[i] = imgArray[random];
//   console.log(imgArray[i]);
// }
// console.log(melangeCarte());

const sousCards = document.querySelectorAll("#Souscard");
const flipCard = document.querySelectorAll("#flip-card");
const cardBackColor = document.querySelectorAll("#cardBack");
// others method

firstCard = false;
secondCard = false;
flipCard.forEach((miniCard) => {
  miniCard.addEventListener("click", () => {
    if (!miniCard.classList.contains("matched")) {
      miniCard.style.transform = "rotateY(180deg)";
      if (!firstCard) {
        firstCard = miniCard;
        firstCardValue = miniCard.getAttribute("class");
      } else {
        secondCard = miniCard;
        let secondCardValue = miniCard.getAttribute("class");
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
  });
});
