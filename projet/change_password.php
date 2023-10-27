<?php require_once "./utils/common.php"?>

<!DOCTYPE html>
<html lang="fr">
<?php require './partials/head.php' ?>
<body>
    <div class="theH">
        <div class="filter">
            <div>
                <div class="header">
                    <nav class="navbar">
                        <div class="space"></div>
                        <div class="title">
                            <ul class="nav-element">
                                <img src="../assets/img/Fichier 1.png" height="30px" width="30px">
                                <li>The Power Of Memory</li>
                            </ul>
                        </div>
                        <div class="list">
                            <ul class="nav-element">
                                <li class="list-inactive" onclick="window.location='../'">ACCUEIL</li>
                                <li class="list-inactive" onclick="window.location='../game_preview'">JEU</li>
                                <li class="list-inactive" onclick="window.location='../score/'">SCORE</li>
                                <li class="list-inactive" onclick="window.location='../contact/'">NOUS CONTACTER</li>                            </ul>
                        </div>
                        <div class="nav-login">
                            <button><img src="../assets/img/login.png" height="20px" width="20px" onclick="window.location = '../login/'"></button>
                        </div>
                        <div class="space"></div>
                    </nav>
                </div>
            </div>
            <div class="nav-page-title">
                <h1> Changer mot de passe </h1>
            </div>
        </div>
    </div>
    <div class="body">
        <section class="form">
        <?php
                include "./utils/database.php";
                $DB = dataconnect();
                $passdRequest = $DB->prepare("SELECT * FROM user where id = $_SESSION[id]");
                $passdRequest->execute();
                if(isset($_POST["password"] ) && isset($_POST["ancien_mdp"]) && isset($_POST["nouvelle_mdp"])){
                    if (password_verify($_POST['ancien_mdp'], $user->psw)) {
                        if ( $_POST["nouveau_mdp"] != $_POST["confirm_mdp"]){
                            echo"Les mot de passe ne corresponde pas !";
                        }
                        else {
                            $upemail = $DB->prepare("UPDATE user SET psw = :psw WHERE id = $_SESSION[id]");
                            $emailHasBeenUpdate = $upemail->execute([
                                ':psw' => $_POST['nouveau_mdp'],
                            ]);
                        }
                    }
                }
            ?>
            <form method="POST" action="traitement.php">
                <input class="pseudo" type="password" name="ancien_mdp"placeholder="Ancien mot de passe"><br>
                <input class="pseudo" type="password" name="nouveau_mdp" placeholder="Nouveau mot de passe"><br>
                <input class="pseudo" type="password" name="confirm_mdp" placeholder="Confirmer nouveau mot de passe"><br>
                <button class="button-5" role="button"> Changer le mot de passe </button>
            </form>
        </section>
    </div>
    <?php require './partials/footer.php' ?>
    <div class="copyrig">
        <span>Copyright © 2022 Tous droits réservés</span>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="../assets/javascript/app.js"></script>
</body>
</html>