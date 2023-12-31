<?php
include './utils/common.php';
require './partials/header.php';

use utils\Header;

require_once("./utils/database.php");
$DB = dataconnect();
if (isset($_POST['Pseudo']) && isset($_POST['Motdepasse'])) {
    $pseudo = $_POST['Pseudo'];
    $recupUser = $DB->prepare('SELECT * FROM user WHERE nickname = :pseudo');
    $recupImg = $DB->query('SELECT imgPdp FROM user');
    $recupScore = $DB->query('SELECT scorePoints FROM user');
    $recupUser->execute([":pseudo" => "$pseudo"]);
    $user = $recupUser->fetch();
    if ($recupUser->rowCount() > 0) {
        if (password_verify($_POST['Motdepasse'], $user->psw)) {
            $_SESSION['Pseudo'] = $pseudo;
            $_SESSION['id'] = $user->id;
            $_SESSION['scorePoints'] = $user->scorePoints;
            $_SESSION['imgPdp'] = $user->imgPdp;
            header('Location: index.php');
        } else {
            $alert = <<<HTML
                <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
                </svg>
                <div class="alert alert-danger d-flex align-items-center justify-content-around" role="alert">
                <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    mot de passe incorrect
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>    
HTML;
        }
    } else {
        $alert = <<<HTML
        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
        </svg>
        <div class="alert alert-danger d-flex align-items-center justify-content-around" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            UNKNOW USER
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>    
HTML;
    }
}
?>
<?php require './partials/head.php' ?>

<body>
    <div class="filter">
        <!-- header -->
        <?php echo Header::addClassic(4, "LOGIN"); ?>
        <!-- header -->
    </div>
    <div class="bodyForm">
        <div class="alertConnexion">
            <?php if (isset($_POST['envoie'])) : ?>
                <?= $alert ?>
            <?php endif ?>
        </div>
        <style>
            .alertConnexion {
                display: flex;
                justify-content: end;
            }

            .alert {
                width: 30%;
                height: 50px;
            }

            .bi {
                width: 50px;
                height: 50px;
            }
        </style>
        <section class="form">
            <form method="post" action="login.php">
                <input class="pseudo" type="text" name="Pseudo" placeholder="Pseudo" autocomplete="off"><br>
                <input class="nomarginb" type="password" name="Motdepasse" placeholder="Mot de passe"><br>
                <span class="spanForm">Mot de passe oublier ?</span><br>
                <input class="button-5" type="submit" name="envoie" role="button"><br>
                <span class="spanForm">Vous n'avez pas de compte, <a href="register.php">s'inscrire ?</a></span>
            </form>
        </section>
    </div>
    <!-- footer  -->
    <?php require './partials/footer.php' ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="../assets/javascript/app.js"></script>
</body>

</html>