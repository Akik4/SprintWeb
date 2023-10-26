<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
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
                <input class="pseudo" type="email" name="Email" placeholder="Email" required><br>
                <input class="pseudo" type="text" name="Pseudo" placeholder="Pseudo" required><br>
                <input class="pseudo" type="password" name="Mot_de_passe" placeholder="Mot de passe" required pattern="/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/"><br>
                <input class="pseudo" type="password" name="Confirmez_le_mot_de_passe" placeholder="Confirmez le mot de passe" required pattern="/(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/"><br>
                <button class="button-5" role="button"> Inscription </button>
            </form>

        </section>
        <?php
            include "./utils/database.php";
            $DB = dataconnect();
            if(isset($_POST["Mot_de_passe"])){
                $name = $_POST['Pseudo'];
                $email = $_POST['email'];
                $psexist = $DB->query("SELECT COUNT(*) FROM user WHERE nickname = '$name'");
                $emexist = $DB->query("SELECT COUNT(*) FROM user WHERE Email = '$email'");
                if (!preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/', $_POST['Mot_de_passe'])){
                    echo 'le mot de passse contenir:-une majuscule
                                                    -une minuscule
                                                    -un chiffre
                                                    -un caractere special'; 
                }
                elseif ( $_POST["Mot_de_passe"] != $_POST['Confirmez_le_mot_de_passe']){
                    echo 'Les mots de passe doivent être identique';
                }

                elseif (!preg_match('/.{4,}$/', $_POST['Pseudo'])){
                    echo 'le pseudo doit faire plus de 4 caractere';
                }
                elseif (!$psexist === 0){
                    echo 'Le pseudo est deja utilisé';
                }
                elseif (!$emexist === 0){
                echo 'Cet Email est deja liée a un compte';
                }
                elseif (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
                    echo 'Email invalide';
                }
                else{
                    $pdoStatement = $DB->prepare('INSERT INTO user (email, psw, nickname) VALUES
                    (:email, :psw, :nickName)');
                    $userHasBeenInserted = $pdoStatement->execute([
                        ':email' => $_POST['Email'],
                        ':psw' => password_hash($_POST['Mot_de_passe'], PASSWORD_DEFAULT),
                        ':nickName' => $_POST['Pseudo'],
                    ]);
                    var_dump($userHasBeenInserted);
                    header('location: login.php');
                }
            }
            ?>
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