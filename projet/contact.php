<?php
include './utils/common.php';
require './partials/header.php';

use utils\Header;
// envoie mail \\
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['Nom'];
    $email = $_POST['Email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['Message'];
    if (isset($_POST['Nom']) && isset($_POST['Email']) && isset($_POST['sujet']) && isset($_POST['Message'])) {
        $to = 'nathanb2505@gmail.com';
        // \\
        $email_subject = 'contact form';
        // \\
        $email_message = "Nom : $name\n";
        $email_message .= "E-mail : $email\n";
        $email_message .= "Sujet : $sujet\n";
        $email_message .= "Message :\n$message";

        $head = "de : $email" . "\n";

        if (mail($to, $email_subject, $email_message, $head)) {
            echo "E-mail envoyé !";
        } else {
            echo "Echec d'envoi de l'Email.";
        }
    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }
}
 ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>Contact</title>
</head>

<body>
    <div class="contact">
        <?php echo Header::addClassic(4, "CONTACT"); ?>
        <div class="bodyContact">
            <div class="wrapper-contact">
                <div class="phone"><img src="../assets/img/phone.png" height="50px" width="50px">
                    <p>06 05 04 03 02</p>
                </div>
                <div class="email"><img src="../assets/img/email.png" height="50px" width="50px">
                    <p>support@powerofmemory.com</p>
                </div>
                <div class="location"><img src="../assets/img/location.png" height="50px" width="50px">
                    <p>Paris</p>
                </div>
            </div>
            <section class="form">
                <form method="POST" action="">
                    <input class="name" type="text" name="Nom" placeholder="Nom">
                    <input class="mail" type="email" name="Email" placeholder="Email"><br>
                    <input class="suj" type="text" name="sujet" placeholder="Sujet"><br>
                    <textarea class="msg" name="Message"placeholder="Message"></textarea><br>
                    <button class="button-5" role="button"> Envoyer </button>
                </form>

        <?php require_once "./chat.php"?>


        <?php require './partials/footer.php' ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <script src="../assets/javascript/app.js"></script>
    </div>
</body>

</html>