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
                        <div class="list1">
                            <ul class="nav-element">
                                <li class="list-inactive" onclick="window.location='../'">ACCUEIL</li>
                                <li class="list-inactive" onclick="window.location='../game_preview'">JEU</li>
                                <li class="list-inactive" onclick="window.location='../score/'">SCORE</li>
                                <li class="list-inactive" onclick="window.location='../contact/'">NOUS CONTACTER</li>
                            </ul>
                        </div>
                        <div class="nav-login">
                            <button><img src="../assets/img/login.png" height="20px" width="20px" onclick="window.location = '../login/'"></button>
                        </div>
                        <div class="space"></div>

                    </nav>
                </div>
            </div>
            <div class="nav-page-title">
                <h1> Changer Email </h1>
            </div>
        </div>
    </div>
    <div class="body">
        <section class="form">
            <form method="POST" action="traitement.php">
                <input class="pseudo" type="email" name="ancien Email"placeholder="Ancien Email"><br>
                <input class="pseudo" type="email" name="nouvelle Email" placeholder="Nouvelle Email"><br>
                <input class="pseudo" type="password" name="password" placeholder="Mot de passe"><br>
                <button class="button-5" role="button"> Changer l'Email </button>
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
