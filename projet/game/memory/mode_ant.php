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
                            </ul>
                        </div>
                        <div class="nav-login">
                            <button><img src="../assets/img/login.png" height="20px" width="20px" onclick="window.location = '../login/login.html'"></button>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="nav-page-title">
                <h1> Choisissez votre difficulté</h1>
            </div>
        </div>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Theme Choose
        </button>
        <ul class="dropdown-menu">
            <li><input type="text" id="lol"> <label class="dropdown-item" id="niveau1" for="caca">Niveau 1</label></li>
            <li><input type="text" id="lol"> <label class="dropdown-item" id="niveau2" for="caca">Niveau 2</label></li>
            <li><input type="text" id="lol"> <label class="dropdown-item" id="niveau3" for="caca">Niveau 3</label></li>
            <style>
                #lol {
                    display: none;
                }

                /* #niveau  {
                    cursor: crosshair;
                } */
            </style>

        </ul>
    </div>
    <div class="preview">
        <div class="memoryGame"></div>
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

        function deleteElement() {
            const element = document.querySelectorAll("#card");
            for (let i = 0; i < element.length; i++) {
                memoryGame.removeChild(element[i]);
            }
        }

        function createElement(valeur) {
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
                    // flipCard.classList.add(generateRandom(4));
                    // cardBack.style.backgroundColor = flipCard.getAttribute("class");
                    newCard2.id = "Souscard";
                    newCard.appendChild(newCard2);
                    newCard2.appendChild(flipCard);
                    flipCard.appendChild(cardFront);
                    flipCard.appendChild(cardBack);
                }
            }
        }
        btns.forEach((btn) => {
            btn.addEventListener('click', () => {
                if (btn.getAttribute('id') == 'niveau1') {
                    deleteElement()
                    createElement(4)
                } else if (btn.getAttribute('id') == 'niveau2') {
                    deleteElement()
                    createElement(8)
                } else {
                    deleteElement()
                    createElement(12)
                }
            })
        })

        // const element = document.querySelectorAll("#card");
        // console.log(element);
    </script>
</body>

</html>