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
</body>

</html>