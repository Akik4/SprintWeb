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
                <img src="<?php echo $obj[0]->url ?>" ;>
                <?php
                require_once './utils/common.php';

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
                            $sendMessage = $db->prepare("INSERT INTO chat(sender_id, game_id, content) value (:sender, 1, :content)");
                            $sendMessage->execute(
                                [
                                    ":sender" => $_SESSION['id'],
                                    ":content" => $_POST["content"],
                                ]
                            );	

                if (isset($_SESSION['id'])) {
                    foreach ($messages as $message) {
                        if ($message->sender_id == $_SESSION['id']) {
                            ?>
                            <div class="messagebox"><span class="self">
                                    <?php echo $message->nickname ?>
                                </span>
                                <div class="messageself"><span class="message">
                                        <?php echo $message->content ?>
                                    </span></div><span class="timestampself"> <?= $message->date_send ?> </span>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="messagebox"><span class="author">
                                    <?php echo $message->nickname ?>
                                </span>
                                <div class="messageother"><span class="message">
                                        <?php echo $message->content ?>
                                    </span></div><span class="timestamp"> <?= $message->date_send ?> </span>
                            </div>
                            <?php
                        }
                    }
                } else { ?>
                    <p>vous devez être connecté</p>
                <?php }

                ?>
            </div>
            <div class="chatmessage">
                <form method="POST" id="chat">
                    <label id="labelchat">
                        <textarea id="message" name="content" cols="100%" type="text"
                            placeholder="Entrez votre message"></textarea>
                        <input type="submit">
                        <label>
                </form>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(function () {
                        $('#chat').on('submit', (e) => {
                            // document.getElementById('chatsender').addEventListener('submit', (e) => {
                            let contentMessage = document.getElementById('message').value;
                            e.preventDefault();
                            if (document.getElementById('errorChat')) {
                                document.getElementById('errorChat').remove();
                            }
                            if (contentMessage.length >= 3) {
                                $.ajax({
                                    url: 'utils/chat.php',
                                    type: "post",
                                    data: { content: contentMessage},
                                    success: function (response) {
                                        let messagebox = document.createElement('div')
                                        messagebox.className = "messagebox";
                                        let self = document.createElement('span');
                                        self.className = "self";
                                        self.innerHTML = "<?= $_SESSION["Pseudo"] ?>";
                                        let messageself = document.createElement('div')
                                        messageself.className = "messageself";
                                        let messages = document.createElement('span')
                                        messages.className = 'message'
                                        messages.innerHTML = contentMessage
                                        let timestamp = document.createElement('span');
                                        timestamp.className = "timestampself"
                                        let now = new Date();
                                        timestamp.innerHTML = now.getFullYear() + "-" + Math.floor(now.getMonth() + 1) + "-" + now.getDate() + " " + now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
                                        messagebox.appendChild(self)
                                        messagebox.appendChild(messageself)
                                        messageself.appendChild(messages)
                                        messagebox.appendChild(timestamp);
                                        document.getElementsByClassName("chatchat")[0].appendChild(messagebox)
                                        document.getElementById('message').value = "";
                                    }
                                })
                                return;
                            }
                            let erreurMessageChat = document.createElement('p')
                            erreurMessageChat.id = "errorChat"
                            erreurMessageChat.style.color = "red";
                            erreurMessageChat.innerHTML = "Votre message doit contenir 3 caractères minimum"
                            document.getElementById('labelchat').appendChild(erreurMessageChat);
                        })
                    })
                </script>
                <?php
                // messageToDatabase($_POST);
                ?>

            </div>
        </div>
    </div>
</section>