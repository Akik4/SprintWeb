<?php
require_once("common.php");
if (isset($_POST['content'])) {
    $db = dataconnect();
    echo "ok";
    $sendMessage = $db->prepare("INSERT INTO chat(sender_id, game_id, content) value (:sender, 1, :content)");
    $sendMessage->execute(
        [
            ":sender" => $_SESSION['id'],
            ":content" => $_POST['content'],
        ]
    );
}
