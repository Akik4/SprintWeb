<?php
require_once 'database.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('ADMIN_MAIL', 'mail@gmail.com');
define('PROJECT_FOLDER', '/projet/');
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);

session_start();

function change_password()
{
    $DB = dataconnect();
    $passdRequest = $DB->prepare("SELECT * FROM user where id = $_SESSION[id]");
    $passdRequest->execute();
    $user = $passdRequest->fetch();
    if (password_verify($_POST['ancien_mdp'], $user->psw)) {
        if ($_POST["nouveau_mdp"] != $_POST["confirm_mdp"]) {
            echo "Les mot de passe ne corresponde pas !";
        } else {
            $upmdp = $DB->prepare("UPDATE user SET psw = :psw WHERE id = $_SESSION[id]");
            $mdpHasBeenUpdate = $upmdp->execute([
                ':psw' => password_hash($_POST['nouveau_mdp'], PASSWORD_DEFAULT)
            ]);
        }
    }
}

function change_email()
{
    $DB = dataconnect();
    $passdRequest = $DB->prepare("SELECT * FROM user where id = $_SESSION[id]");
    $passdRequest->execute();
    $info = $passdRequest->fetch();
    if (password_verify($_POST['password'], $info->psw)) {
        if ($_POST["ancien_Email"] == $_POST["nouvelle_Email"]) {
            echo "<p style='color:white;'>L'email est identique</p>";
        } else {
            $upemail = $DB->prepare("UPDATE user SET email = :email WHERE id = $_SESSION[id]");
            $emailHasBeenUpdate = $upemail->execute([
                ':email' => $_POST['nouvelle_Email'],
            ]);
        }
    } else {
        echo "passd wrong";
    }
}

function register()
{
    $DB = dataconnect();

    $name = $_POST['Pseudo'];
    $email = $_POST['Email'];
    $psexist = $DB->query("SELECT COUNT(*) FROM user WHERE nickname = '$name'");
    $emexist = $DB->query("SELECT COUNT(*) FROM user WHERE Email = '$email'");
    if (!preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/', $_POST['Mot_de_passe'])) {
        echo 'le mot de passse contenir:-une majuscule
                                                    -une minuscule
                                                    -un chiffre
                                                    -un caractere special';
    } elseif ($_POST["Mot_de_passe"] != $_POST['Confirmez_le_mot_de_passe']) {
        echo 'Les mots de passe doivent être identique';
    } elseif (!preg_match('/.{4,}$/', $_POST['Pseudo'])) {
        echo 'le pseudo doit faire plus de 4 caractere';
    } elseif (!$psexist === 0) {
        echo 'Le pseudo est deja utilisé';
    } elseif (!$emexist === 0) {
        echo 'Cet Email est deja liée a un compte';
    } elseif (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
        echo 'Email invalide';
    } else {
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
