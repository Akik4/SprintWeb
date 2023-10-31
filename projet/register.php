<?php 
require_once "./utils/common.php"; 
require_once "./partials/head.php";
?>

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
                    </nav>
                    <div class="nav-login">
                        <button><img src="../assets/img/login.png" height="20px" width="20px" onclick="window.location = '../login/'"></button>
                    </div>
                    <div class="space"></div>
                </div>
            </div>
            <div class="nav-page-title">
                <h1> INSCRIPTION </h1>
            </div>
        </div>
    </div>
    <div class="bodyForm">
        <section class="form">
            <form method="POST" action="">
                <script src="../assets/javascript/mdp_verify.js"></script>
                <input class="pseudo" type="email" name="Email" placeholder="Email" required><br>
                <input class="pseudo" type="text" name="Pseudo" placeholder="Pseudo" required><br>
                <input id="mdp" class="pseudo" type="password" name="Mot_de_passe" placeholder="Mot de passe" onkeydown="Check();" 
                data-bs-html="true" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Il vous faut au minimum :<br> -8 caractères<br> -1 caractères spécial<br> -1 majuscule<br> -1minuscule<br> -1chiffres "><br>
                <table width="300">
                <tr>
                <td id="faible" align="center" style="background-color :white;">Faible</td>
                <td id="moyen" align="center" style="background-color :white;">Moyen</td>
                <td id="elevee" align="center" style="background-color :white;">Elevee</td>
                </tr>
                </table>
                <input class="pseudo" type="password" name="Confirmez_le_mot_de_passe" placeholder="Confirmez le mot de passe" required pattern="/(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/"><br>
                <button class="button-5" role="button"> Inscription </button>
            </form>

        </section>
        <?php
            if(isset($_POST["Mot_de_passe"]) && isset($_POST["Pseudo"]) && isset($_POST["Email"])){
                register();
            } 
            ?>
    </div>
    <?php require './partials/footer.php' ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="../assets/javascript/app.js"></script>
    <script>
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
</body>
</html>