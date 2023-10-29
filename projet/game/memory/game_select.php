<?php
include '../../utils/common.php';
require '../../partials/header.php';

use utils\Header;

?>
<?php
require '../../partials/head.php'
?>

<body>
    <div class="filter">
        <div>
            <?php echo Header::addClassic(2, "jeu"); ?>
        </div>
    </div>
    <!-- <input type="text" class="chooseTheme" name="theme" utocomplete="off">
    <input type="number" class="chooseDifficulty" name="difficulté" autocomplete="off"> -->
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Theme Choose
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="mode_ant.php">op</a></li>
            <li><a class="dropdown-item" href="mode_op.php">halloween</a></li>
            <li><a class="dropdown-item" href="mode_halloween.php">fourmi</a></li>
        </ul>
    </div>

    <div class="preview">
        <button onclick="window.location = 'mode_ant.php'"><img src="../../../assets/img/ant_mode_preview.jpg" alt="ant"></button>
        <button onclick="window.location = 'mode_op.php'"><img src="../../../assets/img/op_preview.png" alt="ant"></button>
        <button onclick="window.location = 'mode_halloween.php'"><img src="../../../assets/img/halloween_preview.jpg" alt="ant"></button>
    </div>
    <?php require '../../partials/footer.php' ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="../assets/javascript/app.js"></script>
</body>

</html>