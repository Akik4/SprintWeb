<?php
require_once('../../projet/utils/common.php');
if(isset($_POST["import"]))
{
    $db = dataconnect();
    $prepare = $db->prepare("UPDATE user set scorePoints = scorePoints + :score where ID = :user_id");
    $prepare->execute([
        ":score" => $_POST['import'],
        ":user_id" => $_SESSION['id']
    ]);
}