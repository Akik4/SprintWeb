<?php

namespace utils;

class Header
{


    static function add(int $active)
    {
?>
        <div class="<?php $t = $active == 1 ? 'theHs' : 'theH';
                    echo $t; ?>">
            <div>
                <div class="header">
                    <nav class="navbar">
                        <div class="space"></div>
                        <div class="title">
                            <ul class="nav-element">
                                <img src="<?php echo PROJECT_FOLDER ?>../assets/img/Fichier 1.png" height="30px" width="30px">
                                <li>The Power Of Memory</li>
                            </ul>
                        </div>
                        <div class="list">
                            <ul class="nav-element">
                                <li class="<?php $t = $active == 1 ? 'list-active' : 'list-inactive';
                                            echo $t; ?>" onclick="window.location='<?php echo PROJECT_FOLDER; ?>index.php'">ACCUEIL</li>
                                <li class="<?php $t = $active == 2 ? 'list-active' : 'list-inactive';
                                            echo $t; ?>" onclick="window.location='<?php echo PROJECT_FOLDER; ?>game/memory/game_select.php'">JEU</li>
                                <li class="<?php $t = $active == 3 ? 'list-active' : 'list-inactive';
                                            echo $t; ?>" onclick="window.location='<?php echo PROJECT_FOLDER; ?>game/memory/scores.php'">SCORE</li>
                                <li class="<?php $t = $active == 4 ? 'list-active' : 'list-inactive';
                                            echo $t; ?>" onclick="window.location='<?php echo PROJECT_FOLDER; ?>contact.php'">NOUS CONTACTER</li>
                            </ul>
                        </div>
                        <div class="nav-login">
                            <div class="space"><input type="checkbox" id="darkMode" class="checkbox">
                                <label for="darkMode"><img class="png" src="<?php echo PROJECT_FOLDER ?>../assets/img/nuit.png" alt=""> </label>
                            </div>
                            <button>
                                <?php
                                if (isset($_SESSION['id'])) {
                                ?>
                                    <img class="pdpUser" src="../assets/img/<?= $_SESSION['imgPdp']; ?>" height="20px" width="20px" onclick="window.location = 'myAccount.php'">
                                    <style>
                                        .pdpUser {
                                            border-radius: 50%;
                                            cursor: pointer;
                                            width: 40px;
                                            height: 40px;
                                        }
                                    </style>
                                <?php

                                } else {
                                ?>
                                    <img src="../assets/img/login.png" height="45px" width="45px" onclick="window.location = 'login.php'">
                                <?php
                                }

                                ?>
                            </button>

                        </div>

                    </nav>
                </div>
            </div>
        </div>




    <?php }

    static function addClassic(int $active, string $name)
    { ?>
        <div class="<?php $t = $active == 1 ? 'theHs' : 'theH';
                    echo $t; ?>">
            <div class="filter">
                <div>
                    <div>
                        <div class="header">
                            <nav class="navbar">
                                <div class="space"></div>
                                <div class="title">
                                    <ul class="nav-element">
                                        <img src="<?php echo PROJECT_FOLDER ?>../assets/img/Fichier 1.png" height="30px" width="30px">
                                        <li>The Power Of Memory</li>
                                    </ul>
                                </div>
                                <div class="list">
                                    <ul class="nav-element">
                                        <li class="<?php $t = $active == 1 ? 'list-active' : 'list-inactive';
                                                    echo $t; ?>" onclick="window.location='<?php echo PROJECT_FOLDER; ?>index.php'">ACCUEIL</li>
                                        <li class="<?php $t = $active == 2 ? 'list-active' : 'list-inactive';
                                                    echo $t; ?>" onclick="window.location='<?php echo PROJECT_FOLDER; ?>game/memory/game_select.php'">JEU</li>
                                        <li class="<?php $t = $active == 3 ? 'list-active' : 'list-inactive';
                                                    echo $t; ?>" onclick="window.location='<?php echo PROJECT_FOLDER; ?>game/memory/scores.php'">SCORE</li>
                                        <li class="<?php $t = $active == 4 ? 'list-active' : 'list-inactive';
                                                    echo $t; ?>" onclick="window.location='<?php echo PROJECT_FOLDER; ?>contact.php'">NOUS CONTACTER</li>
                                </div>
                                <div class="nav-login">
                                    <button>
                                        <?php
                                        if (isset($_SESSION['id'])) {
                                        ?>
                                            <img class="pdpUser" src="<?php echo PROJECT_FOLDER ?>../assets/img/<?= $_SESSION['imgPdp']; ?>" height="20px" width="20px" onclick="window.location = 'myAccount.php'">
                                            <style>
                                                .pdpUser {
                                                    border-radius: 50%;
                                                    cursor: pointer;
                                                    width: 40px;
                                                    height: 40px;
                                                }
                                            </style>
                                        <?php

                                        } else {
                                        ?>
                                            <img src="../assets/img/login.png" height="45px" width="45px" onclick="window.location = 'login.php'">
                                        <?php
                                        }

                                        ?>
                                    </button>
                                </div>
                                <div class="space"></div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="nav-page-title">
                    <h1> <?php echo $name; ?> </h1>
                </div>
            </div>
        </div>
<?php
    }
}
?>