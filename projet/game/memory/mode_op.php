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
                <h1> Choisissez votre thême </h1>
            </div>
        </div>
    </div>
    <div class="preview">
        <button onclick="window.location = '../game_page/gp_op_4x4.html'"><img src="../assets/img/4X4.jpg" alt="ant"></button>
        <button onclick="window.location = '../game_page/gp_op_8x8.html'"><img src="../assets/img/8X8.jpg" alt="ant"></button>
        <button onclick="window.location = '../game_page/gp_op_12x12.html'"><img src="../assets/img/12X12.png" alt="ant"></button>
    </div>
    <?php require '../../partials/footer.php' ?>
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
    <!-- <script>
        alert('test');
    </script> -->
    <script src="../../../assets/javascript/memoryGame.js"></script>

</body>

</html>