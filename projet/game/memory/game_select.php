<?php
$navColor = "gamePage";
include '../../utils/common.php';
require '../../partials/header.php';

use utils\Header;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/header.css">
    <link rel="stylesheet" href="../../../assets/css/footer.css">
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <title>game preview</title>
</head>

<body>
    <div class="theH">
        <div class="filter">
            <div>
                <?php echo Header::addClassic(2, "jeu"); ?>
            </div>
            <div class="nav-page-title">
                <h1> Choisissez votre thême </h1>
            </div>
        </div>
    </div>
    <div class="preview">
        <button onclick="window.location = '../mode_select/mode_select_ant.html'"><img src="../assets/img/ant_mode_preview.jpg" alt="ant"></button>
        <button onclick="window.location = '../mode_select/mode_select_op.html'"><img src="../assets/img/op_preview.png" alt="ant"></button>
        <button onclick="window.location = '../mode_select/mode_select_halloween.html'"><img src="../assets/img/halloween_preview.jpg" alt="ant"></button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="../assets/javascript/app.js"></script>
</body>

</html>