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
            <form method="POST" action="traitement.php">
                <input class="pseudo" type="password" name="ancien Mot de passe"placeholder="Ancien mot de passe"><br>
                <input class="pseudo" type="password" name="nouveau Mot de passe" placeholder="Nouveau mot de passe"><br>
                <input class="pseudo" type="password" name="confirmer nouveau Mot de passe" placeholder="Confirmer nouveau mot de passe"><br>
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