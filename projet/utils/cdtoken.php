<?php
require_once("common.php");
if(isset($_POST['token']))
{
    $db = dataconnect();
    echo "test";
    $u = $db->prepare("UPDATE user SET scorePoints = scorePoints + :token  WHERE id = :id");

    var_dump($u);
    $u->execute([
        ":token" => $_POST['token'], 
        ":id" => $_SESSION["id"]
    ]);
}
