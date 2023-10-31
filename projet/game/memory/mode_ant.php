<?php
include '../../utils/common.php';
require '../../partials/header.php';

use utils\Header;


require '../../partials/head.php'
?>

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
                    <li><input type="text" id="lol"> <label class="dropdown-item" id="niveau1" for="caca">Niveau 1 (4x4)</label></li>
                    <li><input type="text" id="lol"> <label class="dropdown-item" id="niveau2" for="caca">Niveau 2 (8x8)</label></li>
                    <li><input type="text" id="lol"> <label class="dropdown-item" id="niveau3" for="caca">Niveau 3 (12x2)</label></li>
                    <li><input type="text" id="lol"> <label class="dropdown-item" id="niveau3" for="caca">Niveau 4 (16x16)</label></li>
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
        var color = [
            "case1Hal.png",
            "case2Hal.png",
            "case3Hal.png",
            "case4Hal.png",
            "case5Hal.png",
            "case6Hal.png",
            "case7Hal.png",
            "case8Hal.png"
        ]
    </script>
    <script src="../../../assets/javascript/memoryGame.js"></script>
</body>

</html>