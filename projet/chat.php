<button class="chatbutton" onclick="
            chatbox = document.getElementsByClassName('chatboxdisplay')[0].style;
            if(chatbox.opacity == '1'){
                chatbox.bottom = '-1000px'
                chatbox.visibility = 'hidden';
                return chatbox.opacity = '0'
            } 
            chatbox.opacity = '1'
            chatbox.bottom = '0px'
            chatbox.visibility = 'visible'
    
             "><img src="../assets/img/chatbubble.png" width="25px" height="25px"></button>
        </section>


        <section class="chatbox">
            <div class="chatboxdisplay">
                <div class="chatboxopen">
                    <div class="chattitle">
                        <p>chat général</p>
                        <button class="cross" onclick="
                        chatbox = document.getElementsByClassName('chatboxdisplay')[0].style;
                        if(chatbox.opacity == '1'){
                            chatbox.bottom = '-1000px'
                            chatbox.visibility = 'hidden';
                            return chatbox.opacity = '0'
                        } 
                        chatbox.opacity = '1'
                        chatbox.bottom = '0px'
                        chatbox.visibility = 'visible'
                
                         "><img width="25px" height="25px"></button>
                    </div>
                    <?php 
            $json = file_get_contents('https://api.thecatapi.com/v1/images/search?mime_types=gif ');
            $obj = json_decode($json);
            ?>  
            <div class="chatchat">
            <img src="<?php echo $obj[0]->url ?>";>
                        <?php 
                            require_once './utils/common.php';
                            require_once SITE_ROOT ."/SprintWeb/projet/utils/database.php";
                        
                            $pdo = dataconnect();
                            $getMessage = $pdo->prepare("SELECT * FROM chat INNER JOIN user ON sender_id = user.id ORDER BY chat.id ASC");
                            $getMessage->execute();
                            $messages = $getMessage->fetchAll();

                            if(isset($_SESSION['id']))
                            {
                            foreach ($messages as $message) {
                                    if($message->sender_id == $_SESSION['id'])
                                    {
                                        ?> 
                                        <div class="messagebox"><span class="self"><?php echo $message->nickname ?></span>
                                            <div class="messageself"><span class="message"><?php echo $message->content ?></span></div><span class="timestampself">Aujourd'hui 10:53</span>
                                        </div>      
                                    <?php
                                    }
                                    else {
                                        ?>
                                        <div class="messagebox"><span class="author"><?php echo $message->nickname ?></span>
                                            <div class="messageother"><span class="message"><?php echo $message->content ?></span></div><span class="timestamp">Aujourd'hui 10:53</span>
                                        </div>
                                        <?php
                                    }
                                }
                            } else { ?> <p>vous devez être connecté</p> <?php }

                        ?>
                    </div>
                    <div class="chatmessage">
                        <form method="POST">
                            <label>
                                <textarea name="content" cols="100%" type="text" placeholder="Entrez votre message"></textarea>
                                <input type="submit" name="send" >
                            <label>
                        </form>
                        <?php 
                        if(isset($_POST["content"])) 
                        {
                            echo "test";
                            $sendMessage = $db->prepare("INSERT INTO chat(sender_id, game_id, content) value (:sender, 1, :content)");
                            $sendMessage->execute(
                                [
                                    ":sender" => $_SESSION['id'],
                                    ":content" => $_POST["content"],
                                ]
                            );	

                        }
                        ?>

                    </div>
                </div>
            </div>
        </section>