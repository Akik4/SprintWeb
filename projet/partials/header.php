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
                                        <li class="<?php $t = $active == 5 ? 'list-active' : 'list-inactive';
                                                    echo $t; ?>" onclick="window.location='<?php echo PROJECT_FOLDER; ?>contact.php'"><svg viewBox="0 0 576 512" height="1em" class="logoIcon">
                                                <path d="M309 106c11.4-7 19-19.7 19-34c0-22.1-17.9-40-40-40s-40 17.9-40 40c0 14.4 7.6 27 19 34L209.7 220.6c-9.1 18.2-32.7 23.4-48.6 10.7L72 160c5-6.7 8-15 8-24c0-22.1-17.9-40-40-40S0 113.9 0 136s17.9 40 40 40c.2 0 .5 0 .7 0L86.4 427.4c5.5 30.4 32 52.6 63 52.6H426.6c30.9 0 57.4-22.1 63-52.6L535.3 176c.2 0 .5 0 .7 0c22.1 0 40-17.9 40-40s-17.9-40-40-40s-40 17.9-40 40c0 9 3 17.3 8 24l-89.1 71.3c-15.9 12.7-39.5 7.5-48.6-10.7L309 106z"></path>
                                            </svg>
                                            <button class="btnPremium">GO PREMIUM</button>
                                            <style>
                                                .btnPremium {
                                                    background: linear-gradient(to right, #bf953f, #fcf6ba, #b38728, #fbf5b7, #aa771c);
                                                    ;
                                                    border: none;
                                                }
                                            </style>
                                        </li>
                                </div>
                                <div class="nav-login">
                                    <button>
                                        <?php
                                        if (isset($_SESSION['id'])) {
                                        ?>
                                            <img class="pdpUser" src="<?php echo PROJECT_FOLDER ?>../assets/img/<?= $_SESSION['imgPdp']; ?>" height="20px" width="20px" onclick="window.location = '<?php echo PROJECT_FOLDER ?>myAccount.php'">
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
                                            <img src="<?php echo PROJECT_FOLDER ?>../assets/img/login.png" height="45px" width="45px" onclick="window.location = '<?php echo PROJECT_FOLDER ?>login.php'">
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