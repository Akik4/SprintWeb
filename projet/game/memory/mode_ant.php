<?php
include '../../utils/common.php';
require '../../partials/header.php';

use utils\Header;


require '../../partials/head.php'
?>
<!-- oncontextmenu="return false" -->

<body>
    <div class="filter">
        <?php echo Header::addClassic(2, "jeu"); ?>
    </div>
    <div class="nav-page-title">
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

    <!-- game  -->
    <div class="preview">

        <div class="btnMemoryGame-mode-ant d-flex justify-content-center">
            <div class="dropdown m-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Niveau de difficulté
                </button>
                <ul class="dropdown-menu">
                    <li><input type="text" id="lol"> <label class="selectDifficulty dropdown-item" id="niveau1" for="lol">Niveau 1 (4x4)</label></li>
                    <li><input type="text" id="lol"> <label class="selectDifficulty dropdown-item" id="niveau2" for="lol">Niveau 2 (8x8)</label></li>
                    <li><input type="text" id="lol"> <label class="selectDifficulty dropdown-item" id="niveau3" for="lol">Niveau 3 (12x2)</label></li>
                    <li><input type="text" id="lol"> <label class="selectDifficulty dropdown-item" id="niveau4" for="lol">Niveau 4 (16x16)</label></li>
                    <style>
                        #lol {
                            display: none;
                        }
                    </style>
                </ul>
            </div>
            <div class="dropdown m-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Theme Choose
                </button>
                <ul class="dropdown-menu">
                    <li><input type="text" id="lol"> <label class="themeChooes dropdown-item" id="theme1" for="lol"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M19 11H5C3.89543 11 3 11.8954 3 13V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V13C21 11.8954 20.1046 11 19 11Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7 10.9999V6.99991C6.99876 5.75996 7.45828 4.56378 8.28938 3.64358C9.12047 2.72338 10.2638 2.14481 11.4975 2.0202C12.7312 1.89558 13.9671 2.23381 14.9655 2.96922C15.9638 3.70463 16.6533 4.78476 16.9 5.99991" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Theme Halloween</label></li>
                    <li><input type="text" id="lol"> <label class="themeChooes dropdown-item" id="theme2" for="lol"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M19 11H5C3.89543 11 3 11.8954 3 13V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V13C21 11.8954 20.1046 11 19 11Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7 10.9999V6.99991C6.99876 5.75996 7.45828 4.56378 8.28938 3.64358C9.12047 2.72338 10.2638 2.14481 11.4975 2.0202C12.7312 1.89558 13.9671 2.23381 14.9655 2.96922C15.9638 3.70463 16.6533 4.78476 16.9 5.99991" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Theme Chat Masquée</label></li>
                    <li><input type="text" id="lol"> <label class="themeChooes dropdown-item" id="theme3" for="lol"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M19 11H5C3.89543 11 3 11.8954 3 13V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V13C21 11.8954 20.1046 11 19 11Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7 10.9999V6.99991C6.99876 5.75996 7.45828 4.56378 8.28938 3.64358C9.12047 2.72338 10.2638 2.14481 11.4975 2.0202C12.7312 1.89558 13.9671 2.23381 14.9655 2.96922C15.9638 3.70463 16.6533 4.78476 16.9 5.99991" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Theme Tortue</label></li>
                    <li><input type="text" id="lol"> <label class=" themeChooes dropdown-item" id="theme3" for="lol"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                <path d="M19.5738 11.1655H5.57379C4.46922 11.1655 3.57379 12.061 3.57379 13.1655V20.1655C3.57379 21.2701 4.46922 22.1655 5.57379 22.1655H19.5738C20.6784 22.1655 21.5738 21.2701 21.5738 20.1655V13.1655C21.5738 12.061 20.6784 11.1655 19.5738 11.1655Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.57379 11.1655V7.16553C7.57379 5.83944 8.10058 4.56768 9.03826 3.62999C9.97594 2.69231 11.2477 2.16553 12.5738 2.16553C13.8999 2.16553 15.1716 2.69231 16.1093 3.62999C17.047 4.56768 17.5738 5.83944 17.5738 7.16553V11.1655" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Theme Super Héro</label></li>
                    <li><input type="text" id="lol"> <label class="disabledTheme themeChooes dropdown-item" id="theme3" for="lol"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                <path d="M19.5738 11.1655H5.57379C4.46922 11.1655 3.57379 12.061 3.57379 13.1655V20.1655C3.57379 21.2701 4.46922 22.1655 5.57379 22.1655H19.5738C20.6784 22.1655 21.5738 21.2701 21.5738 20.1655V13.1655C21.5738 12.061 20.6784 11.1655 19.5738 11.1655Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.57379 11.1655V7.16553C7.57379 5.83944 8.10058 4.56768 9.03826 3.62999C9.97594 2.69231 11.2477 2.16553 12.5738 2.16553C13.8999 2.16553 15.1716 2.69231 16.1093 3.62999C17.047 4.56768 17.5738 5.83944 17.5738 7.16553V11.1655" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Theme Ninja</label></li>
                    <li><input type="text" id="lol"> <label class="disabledTheme themeChooes dropdown-item" id="theme3" for="lol"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                <path d="M19.5738 11.1655H5.57379C4.46922 11.1655 3.57379 12.061 3.57379 13.1655V20.1655C3.57379 21.2701 4.46922 22.1655 5.57379 22.1655H19.5738C20.6784 22.1655 21.5738 21.2701 21.5738 20.1655V13.1655C21.5738 12.061 20.6784 11.1655 19.5738 11.1655Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.57379 11.1655V7.16553C7.57379 5.83944 8.10058 4.56768 9.03826 3.62999C9.97594 2.69231 11.2477 2.16553 12.5738 2.16553C13.8999 2.16553 15.1716 2.69231 16.1093 3.62999C17.047 4.56768 17.5738 5.83944 17.5738 7.16553V11.1655" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Theme Nourriture</label></li>
                    <li><input type="text" id="lol"> <label class="disabledTheme themeChooes dropdown-item" id="theme3" for="lol"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                <path d="M19.5738 11.1655H5.57379C4.46922 11.1655 3.57379 12.061 3.57379 13.1655V20.1655C3.57379 21.2701 4.46922 22.1655 5.57379 22.1655H19.5738C20.6784 22.1655 21.5738 21.2701 21.5738 20.1655V13.1655C21.5738 12.061 20.6784 11.1655 19.5738 11.1655Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.57379 11.1655V7.16553C7.57379 5.83944 8.10058 4.56768 9.03826 3.62999C9.97594 2.69231 11.2477 2.16553 12.5738 2.16553C13.8999 2.16553 15.1716 2.69231 16.1093 3.62999C17.047 4.56768 17.5738 5.83944 17.5738 7.16553V11.1655" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Theme Astronautes</label></li>
                    <li><input type="text" id="lol"> <label class="disabledTheme themeChooes dropdown-item" id="theme3" for="lol"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                <path d="M19.5738 11.1655H5.57379C4.46922 11.1655 3.57379 12.061 3.57379 13.1655V20.1655C3.57379 21.2701 4.46922 22.1655 5.57379 22.1655H19.5738C20.6784 22.1655 21.5738 21.2701 21.5738 20.1655V13.1655C21.5738 12.061 20.6784 11.1655 19.5738 11.1655Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.57379 11.1655V7.16553C7.57379 5.83944 8.10058 4.56768 9.03826 3.62999C9.97594 2.69231 11.2477 2.16553 12.5738 2.16553C13.8999 2.16553 15.1716 2.69231 16.1093 3.62999C17.047 4.56768 17.5738 5.83944 17.5738 7.16553V11.1655" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Theme Samourai</label></li>
                    <li><input type="text" id="lol"> <label class="disabledTheme themeChooes dropdown-item" id="theme3" for="lol"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                <path d="M19.5738 11.1655H5.57379C4.46922 11.1655 3.57379 12.061 3.57379 13.1655V20.1655C3.57379 21.2701 4.46922 22.1655 5.57379 22.1655H19.5738C20.6784 22.1655 21.5738 21.2701 21.5738 20.1655V13.1655C21.5738 12.061 20.6784 11.1655 19.5738 11.1655Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.57379 11.1655V7.16553C7.57379 5.83944 8.10058 4.56768 9.03826 3.62999C9.97594 2.69231 11.2477 2.16553 12.5738 2.16553C13.8999 2.16553 15.1716 2.69231 16.1093 3.62999C17.047 4.56768 17.5738 5.83944 17.5738 7.16553V11.1655" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>Theme Animals</label></li>
                </ul>
                <style>
                    .disabledTheme {
                        pointer-events: none;
                    }
                </style>
            </div>
            <button type="button" class="btn btn-primary m-3 timerStart1">Timer</button>
        </div>
        <div class="timerGame d-flex justify-content-center">
            <div class="timerMinute fs-1" style="color: white;">0:</div>
            <div class="timer fs-1" style="color: white;">0</div>
        </div>
        <!-- <div class="memoryGame d-flex justify-content-center"></div>
     -->
        <div class="container d-flex justify-content-center">
            <table id="gameboard"></table>
        </div>

    </div>

    <!-- game  -->
    <?php require '../../partials/footer.php' ?>

    <style>
        #cardFront {
            background: url('../../../assets/img/9900_3_2_05.jpg') center / cover no-repeat;
        }

        #cardBack {
            transform: rotateY(180deg);
        }
    </style>

    <script>
        // document.onkeydown = (e) => {
        //     if (e.key == 123) {
        //         e.preventDefault();
        //     }
        //     if (e.ctrlKey && e.shiftKey && e.key == 'I') {
        //         e.preventDefault();
        //     }
        //     if (e.ctrlKey && e.shiftKey && e.key == 'C') {
        //         e.preventDefault();
        //     }
        //     if (e.ctrlKey && e.shiftKey && e.key == 'J') {
        //         e.preventDefault();
        //     }
        //     if (e.ctrlKey && e.key == 'U') {
        //         e.preventDefault();
        //     }
        // };
        const selectTheme = document.querySelectorAll('.themeChooes');
        console.log(selectTheme[0]);
        var color = [];

        selectTheme.forEach(element => {
            element.addEventListener('click', () => {
                element.classList.add('themeChooes-active');
                chooseThemeImg();
                console.log(color);

            })
        })
        ifThemeChoose = false;

        function chooseThemeImg() {
            if (selectTheme[0].classList.contains('themeChooes-active')) {
                ifThemeChoose = true;
                return color.push("case1Hal.png",
                    "case2Hal.png",
                    "case3Hal.png",
                    "case4Hal.png",
                    "case5Hal.png",
                    "case6Hal.png",
                    "case7Hal.png",
                    "case8Hal.png")
            } else if ((selectTheme[1].classList.contains('themeChooes-active'))) {
                ifThemeChoose = true;
                return color.push("chat8.png",
                    "chat1.png",
                    "chat2.png",
                    "chat3.png",
                    "chat4.png",
                    "chat5.png",
                    "chat6.png",
                    "chat7.png")
            } else if ((selectTheme[2].classList.contains('themeChooes-active'))) {
                ifThemeChoose = true;

                return color.push("torute1.png",
                    "tortue2.png",
                    "tortue3.png",
                    "tortue4.png",
                    "tortue5.png",
                    "tortue6.png",
                    "tortue7.png",
                    "tortue8.png")
            } else if ((selectTheme[3].classList.contains('themeChooes-active'))) {
                ifThemeChoose = true;

                return color.push("chat8.png",
                    "chat1.png",
                    "chat2.png",
                    "chat3.png",
                    "chat4.png",
                    "chat5.png",
                    "chat6.png",
                    "chat7.nknlkpng")
            } else if ((selectTheme[4].classList.contains('themeChooes-active'))) {
                ifThemeChoose = true;

                return color.push("chat8.png",
                    "chat1.png",
                    "chat2.png",
                    "chat3.png",
                    "chat4.png",
                    "chat5.png",
                    "chat6.png",
                    "chat7.png")
            }
        }
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>        
    <script src="../../../assets/javascript/memoryGame.js"></script>
    <!-- <script>
        alert(testValue);
    </script> -->
</body>

</html>