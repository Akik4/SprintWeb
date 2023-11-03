<?php
require_once("common.php");
// isset($_POST['user_id']) && 
if (isset($_POST['score']) && isset($_POST['difficulty'])) {
    $db = dataconnect();
    echo "test";
    $u = $db->prepare("INSERT INTO score (user_id, points, difficulty, game_id) VALUES (:user_id, :points, :difficulty, 1)");

    var_dump($u);
    $u->execute([
        ":user_id" => $_SESSION["id"],
        ":points" => $_POST["score"],
        ":difficulty" => $_POST["difficulty"]
    ]);
}
echo "test";
