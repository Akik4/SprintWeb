<?php require_once "./utils/common.php"?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <title>changement_mot_de_passe</title>
</head>
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
                if(isset($_POST["confirm_mdp"] ) && isset($_POST["ancien_mdp"]) && isset($_POST["nouveau_mdp"])){
                    change_password();
                }
            ?>
            <form method="POST" action="">
                <input class="pseudo" type="password" name="ancien_mdp"placeholder="Ancien mot de passe"><br>
                <input class="pseudo" type="password" name="nouveau_mdp" placeholder="Nouveau mot de passe"><br>
                <input class="pseudo" type="password" name="confirm_mdp" placeholder="Confirmer nouveau mot de passe"><br>
                <button class="button-5" role="button"> Changer le mot de passe </button>
            </form>
        </section>
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