<?php

session_start();

$DB = new PDO('mysql:host=localhost;dbname=memory;charset=utf8;', 'root', '');
if (isset($_POST['envoie'])) {
    if (!empty($_POST['Pseudo']) && !empty($_POST['Motdepasse'])) {
        $pseudo = $_POST['Pseudo'];
        $psw = password_hash($_POST['Motdepasse'],PASSWORD_DEFAULT);

        $recupUser = $DB->prepare('SELECT * FROM user WHERE nickname = ? AND psw = ?'); //test
        $recupImg = $DB->query('SELECT imgPdp FROM user'); 
        $recupUser->execute(array($pseudo, $psw)); //test

        if ($recupUser->rowCount() > 0) {
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['psw'] = $psw;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            $_SESSION['imgPdp'] = $recupImg->fetch()['imgPdp'];
            header('Location: index.php');
        } else {
            $alert = <<<HTML
            <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
            <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
            </svg>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
                An example danger alert with an icon
            </div>
            </div>    
HTML;
        }
    } else {
        echo 'veuillez renseigner un champ svp';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>login</title>
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
                                <li class="list-inactive" onclick="window.location='../contact/'">NOUS CONTACTER</li>
                            </ul>
                        </div>
                    </nav>
                    <div class="nav-login">
                        <button><img src="../assets/img/login.png" height="20px" width="20px" onclick="window.location = '../login/'"></button>
                    </div>
                    <div class="space"></div>
                </div>
            </div>
            <div class="nav-page-title">
                <h1> CONNEXION </h1>
            </div>

        </div>
    </div>
    <div class="bodyForm">
        <div class="alertConnexion">
            <?= $alert ?>
        </div>
        <style>
            .alert {
                width: 50%;
                height: 50px;
            }

            .bi {
                width: 50px;
                height: 50px;
            }
        </style>
        <section class="form">
            <form method="post" action="login.php">
                <input class="pseudo" type="text" name="Pseudo" placeholder="Pseudo"><br>
                <input class="nomarginb" type="password" name="Motdepasse" placeholder="Mot de passe"><br>
                <span class="spanForm">Mot de passe oublier ?</span><br>
                <input class="button-5" type="submit" name="envoie" role="button"><br>
                <span class="spanForm">Vous n'avez pas de compte, <a href="../register/">s'inscrire ?</a></span>
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