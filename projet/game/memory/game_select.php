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
    <div class="filter">
        <div>
            <?php echo Header::addClassic(2, "jeu"); ?>
        </div>
    </div>
    <div class="preview">
        <button onclick="window.location = '../mode_select/mode_select_ant.html'"><img src="../../../assets/img/ant_mode_preview.jpg" alt="ant"></button>
        <button onclick="window.location = '../mode_select/mode_select_op.html'"><img src="../../../assets/img/op_preview.png" alt="ant"></button>
        <button onclick="window.location = '../mode_select/mode_select_halloween.html'"><img src="../../../assets/img/halloween_preview.jpg" alt="ant"></button>
    </div>
    <?php require '../../partials/footer.php' ?>
    <div class="copyrig">
        <span>Copyright © 2022 Tous droits réservés</span>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="../assets/javascript/app.js"></script>
</body>

</html>