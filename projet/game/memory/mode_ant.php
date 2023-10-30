<?php
include '../../utils/common.php';
require '../../partials/head.php'
?>

<body>
    <div class="theH">
        <div class="filter">
            <div>
                <div class="header">
                    <nav class="navbar">
                        <div class="title">
                            <ul class="nav-element">
                                <li>The Power Of Memory</li>
                            </ul>
                        </div>
                        <div class="list">
                            <ul class="nav-element">
                                <li class="list-inactive" onclick="window.location='../'">ACCUEIL</li>
                                <li class="list-inactive" onclick="window.location='../game_preview'">JEU</li>
                                <li class="list-inactive" onclick="window.location='../score/'">SCORE</li>
                                <li class="list-inactive" onclick="window.location='../contact/'">NOUS CONTACTER</li>
                                <li class="list-inactive" onclick="window.location='../contact/'">GO PREMIUM</li>
                            </ul>
                        </div>
                        <div class="nav-login">
                            <button><img src="../../../assets/img/login.png" height="20px" width="20px" onclick="window.location = '../login/login.html'"></button>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="nav-page-title">
                <h1> Choisissez votre difficulté</h1>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-primary">
                                Vous venez de gagner 10 points d'expérience et 10 codingToken
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->

            </div>
        </div>
    </div>
    <!-- game  -->
    <div class="preview">

        <div class="btnMemoryGame-mode-ant d-flex justify-content-center">
            <div class="dropdown m-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Niveau de difficulté
                </button>
                <ul class="dropdown-menu">
                    <li><input type="text" id="lol"> <label class="dropdown-item" id="niveau1" for="caca">Niveau 1</label></li>
                    <li><input type="text" id="lol"> <label class="dropdown-item" id="niveau2" for="caca">Niveau 2</label></li>
                    <li><input type="text" id="lol"> <label class="dropdown-item" id="niveau3" for="caca">Niveau 3</label></li>
                    <style>
                        #lol {
                            display: none;
                        }
                    </style>
                </ul>
            </div>
            <button type="button" class="btn btn-primary m-3 timerStart1">Timer</button>
        </div>
        <div class="timerGame d-flex justify-content-center">
            <div class="timerMinute fs-1" style="color: white;">0:</div>
            <div class="timer fs-1" style="color: white;">0</div>
        </div>
        <div class="memoryGame d-flex justify-content-center"></div>
    </div>
    <!-- game  -->

    <div class="footer">
        <div class="info">
            <p style="font-weight: bold;">Information</p>
            <p>Quisque commodo facilisis purus, interdum volupat arcu viverra sed.</p>
            <p><span class="footer-title">Tel:</span> 06 05 04 03 02</p>
            <p><span class="footer-title">Email:</span> support@powerofmemory.com</p>
            <p><span class="footer-title">Location:</span> Paris</p>
            <button onclick="window.location = 'https:\/\/facebook.com'"><img src="../assets/img/facebook.png" width="20px" height="20px"></button>
            <button onclick="window.location = 'https:\/\/x.com'"><img src="../assets/img/twitter.png" width="20px" height="20px"></button>
            <button onclick="window.location = 'https:\/\/google.com'"><img src="../assets/img/google.png" width="20px" height="20px"></button>
            <button onclick="window.location = 'https:\/\/pinterest.com'"><img src="../assets/img/pinterest.png" width="20px" height="20px"></button>
            <button onclick="window.location = 'https:\/\/instagram.com'"><img src="../assets/img/Instagram.png" width="20px" height="20px"></button>
        </div>
        <div class="other">
            <div>
                <p style="font-weight: bold;">Power Of Memory</p>

                <p class="olist">Jouer !</p>
                <p class="olist">Les scores</p>
                <p class="olist">Nous contacter</p>

            </div>
        </div>

    </div>
    <div class="copyrig">
        <span>Copyright © 2022 Tous droits réservés</span>
    </div>
    <script>
        const memoryGame = document.querySelector(".memoryGame");
        const btns = document.querySelectorAll('.dropdown-item');
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
            let cardValues = "";
            size = (size * size) / 2;
            for (let i = 0; i < size; i++) {
                const randomIndex = Math.floor(Math.random() * imgArray.length);
                cardValues = imgArray[randomIndex];
            }
            return cardValues;
        };

        const deleteElement = () => {
            const element = document.querySelectorAll("#card");
            for (let i = 0; i < element.length; i++) {
                memoryGame.removeChild(element[i]);
            }
        }

        const createElement = (valeur) => {
            for (let i = 0; i < valeur; i++) {
                let newCard = document.createElement("div");
                newCard.id = "card";
                memoryGame.appendChild(newCard);
                for (let i = 0; i < valeur; i++) {
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
        }


        const theo = document.querySelector('.timer');
        const theo1 = document.querySelector('.timerMinute');
        const event = document.querySelector('.timerStart1');
        console.log(event);

        event.addEventListener('click', () => {
            console.log("hello");
            setInterval(timer, 1000)
        })
        let time = 0;
        let timeMinutes = 0;

        function timer() {
            theo.innerText = time
            if (time == 59) {
                timeMinutes++
                theo1.innerText = timeMinutes + ":";
                time = 0
            } else {
                time++
            }
            let k = theo.innerText
            return k
        }

        // arreter le temps quand toutes les cartes seront retournées
        btns.forEach((btn) => {
            btn.addEventListener('click', () => {
                if (btn.getAttribute('id') == 'niveau1') {
                    deleteElement();
                    createElement(4);
                    game();
                    // finish();
                } else if (btn.getAttribute('id') == 'niveau2') {
                    deleteElement();
                    createElement(8);
                    game();
                } else {
                    deleteElement();
                    createElement(12);
                    game();
                }
            })
        })
        const modalValue = document.querySelector('.modal-body')

        function game() {
            const sousCards = document.querySelectorAll("#Souscard");
            const flipCard = document.querySelectorAll("#flip-card");
            const cardBackColor = document.querySelectorAll("#cardBack");
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
                    let tableau = [];
                    for (let j = 0; j < 16; j++) {
                        // flipCard[j].classList.contains('matched')
                        // flipCard[j].classList.contains('matched')
                        if (flipCard[j].classList.contains('matched')) {
                            tableau.push(j)
                            if (tableau.length == 16) {
                                // timerGameStart()
                                setTimeout(() => {
                                    memoryGame.innerHTML = `<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Points Gagner
</button>`
                                }, 1000);
                                let timeValue = 0;
                                if (timer() < 10) {
                                    timeValue = 899
                                } else {
                                    timeValue = 20
                                }
                                modalValue.innerText = `Vous venez de gagner 10 points d'epxérience et ${timeValue} codingToken`;

                            }

                        }
                    }
                });

            });
            // const flipCard = document.querySelectorAll("#flip-card");

        }
    </script>
</body>

</html>