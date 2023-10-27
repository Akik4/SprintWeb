<?php require_once "./utils/common.php"?>

<?php require_once './partials/head.php' ?>

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
            <?php
                include "./utils/database.php";
                $DB = dataconnect();
                $passdRequest = $DB->prepare("SELECT * FROM user where id = $_SESSION[id]");
                $passdRequest->execute();
                $info = $passdRequest->fetch();
                if(isset($_POST["password"] ) && isset($_POST["ancien_Email"]) && isset($_POST["nouvelle_Email"])){
                    if (password_verify($_POST['password'], $info->psw)) {
                        if ( $_POST["ancien_Email"] == $_POST["nouvelle_Email"]){
                            echo"<p style='color:white;'>L'email est identique</p>";
                        }
                        else {
                            $upemail = $DB->prepare("UPDATE user SET email = :email WHERE id = $_SESSION[id]");
                            $emailHasBeenUpdate = $upemail->execute([
                                ':email' => $_POST['nouvelle_Email'],
                            ]);
                        }
                    } else {
                        echo "passd wrong";
                    }
                    
                } else {
                    echo "non";
                }
            ?>
            <form method="POST" action="">
                <input class="pseudo" type="email" name="ancien_Email"placeholder="Ancien Email"><br>
                <input class="pseudo" type="email" name="nouvelle_Email" placeholder="Nouvelle Email"><br>
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
