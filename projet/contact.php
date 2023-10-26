<?php
include './utils/common.php';
require './partials/header.php';

use utils\Header;

?>
<?php require './partials/head.php' ?>

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
                <form method="POST" action="traitement.php">
                    <input class="name" type="text" name="Nom" placeholder="Nom">
                    <input class="mail" type="email" name="Email" placeholder="Email"><br>
                    <input class="suj" type="text" name="sujet" placeholder="Sujet"><br>
                    <textarea class="msg" placeholder="Message"></textarea><br>
                    <button class="button-5" role="button"> Envoyer </button>
                </form>
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
        </div>
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
                    <div class="chatchat">
                        <div class="messagebox"><span class="author">test</span>
                            <div class="messageother"><span class="message">testtesttesttesttesttesttesttesttesttest</span></div><span class="timestamp">Aujourd'hui 10:53</span>
                        </div>
                        <div class="messagebox"><span class="author">test</span>
                            <div class="messageother"><span class="message">test</span></div><span class="timestamp">Aujourd'hui 10:53</span>
                        </div>
                        <div class="messagebox"><span class="self">test</span>
                            <div class="messageself"><span class="message">C'est le test</span></div><span class="timestampself">Aujourd'hui 10:53</span>
                        </div>
                        <div class="messagebox"><span class="author">test</span>
                            <div class="messageother"><span class="message">test</span></div><span class="timestamp">Aujourd'hui 10:53</span>
                        </div>
                        <div class="messagebox"><span class="author">test</span>
                            <div class="messageother"><span class="message">test</span></div><span class="timestamp">Aujourd'hui 10:53</span>
                        </div>
                        <div class="messagebox"><span class="author">test</span>
                            <div class="messageother"><span class="message">test</span></div><span class="timestamp">Aujourd'hui 10:53</span>
                        </div>
                        <div class="messagebox"><span class="self">test</span>
                            <div class="messageself"><span class="message">C'est le test</span></div><span class="timestampself">Aujourd'hui 10:53</span>
                        </div>
                        <div class="messagebox"><span class="self">test</span>
                            <div class="messageself"><span class="message">C'est le test</span></div><span class="timestampself">Aujourd'hui 10:53</span>
                        </div>
                        <div class="messagebox"><span class="author">test</span>
                            <div class="messageother"><span class="message">test</span></div><span class="timestamp">Aujourd'hui 10:53</span>
                        </div>
                        <div class="messagebox"><span class="author">test</span>
                            <div class="messageother"><span class="message">test</span></div><span class="timestamp">Aujourd'hui 10:53</span>
                        </div>
                        <div class="messagebox"><span class="author">test</span>
                            <div class="messageother"><span class="message">test</span></div><span class="timestamp">Aujourd'hui 10:53</span>
                        </div>
                        <div class="messagebox"><span class="self">test</span>
                            <div class="messageself"><span class="message">C'est le test</span></div><span class="timestampself">Aujourd'hui 10:53</span>
                        </div>
                    </div>
                    <div class="chatmessage">
                        <textarea cols="100%" type="text" placeholder="Entrez votre message"></textarea>
                    </div>
                </div>
            </div>
        </section>
        <?php require './partials/footer.php' ?>
        <div class="copyrig">
            <span>Copyright © 2022 Tous droits réservés</span>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <script src="../assets/javascript/app.js"></script>
    </div>
</body>

</html>