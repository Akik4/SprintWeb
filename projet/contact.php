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
        <div class="theH">
            <div class="filter">
                <div>
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
                                        <li class="list-active">NOUS CONTACTER</li></ul>
                                </div>
                                <div class="nav-login">
                                    <button><img src="../assets/img/login.png" height="20px" width="20px" onclick="window.location = '../login/login.html'"></button>
                                </div>
                                <div class="space"></div>   
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="nav-page-title">
                    <h1> Contact </h1>
                </div>
            </div>
        </div>

        <div class="bodyContact">
        <div class="wrapper-contact">
                <div class="phone"><img src="../assets/img/phone.png" height="50px" width="50px"><p>06 05 04 03 02</p></div>
                <div class="email"><img src="../assets/img/email.png" height="50px" width="50px"><p>support@powerofmemory.com</p></div>
                <div class="location"><img src="../assets/img/location.png" height="50px" width="50px"><p>Paris</p></div>
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
                        <div class="messagebox"><span class="author">test</span><div class="messageother"><span class="message">testtesttesttesttesttesttesttesttesttest</span></div><span class="timestamp">Aujourd'hui 10:53</span></div>
                        <div class="messagebox"><span class="author">test</span><div class="messageother"><span class="message">test</span></div><span class="timestamp">Aujourd'hui 10:53</span></div>
                        <div class="messagebox"><span class="self">test</span><div class="messageself"><span class="message">C'est le test</span></div><span class="timestampself">Aujourd'hui 10:53</span></div>
                        <div class="messagebox"><span class="author">test</span><div class="messageother"><span class="message">test</span></div><span class="timestamp">Aujourd'hui 10:53</span></div>
                        <div class="messagebox"><span class="author">test</span><div class="messageother"><span class="message">test</span></div><span class="timestamp">Aujourd'hui 10:53</span></div>
                        <div class="messagebox"><span class="author">test</span><div class="messageother"><span class="message">test</span></div><span class="timestamp">Aujourd'hui 10:53</span></div>
                        <div class="messagebox"><span class="self">test</span><div class="messageself"><span class="message">C'est le test</span></div><span class="timestampself">Aujourd'hui 10:53</span></div>
                        <div class="messagebox"><span class="self">test</span><div class="messageself"><span class="message">C'est le test</span></div><span class="timestampself">Aujourd'hui 10:53</span></div>
                        <div class="messagebox"><span class="author">test</span><div class="messageother"><span class="message">test</span></div><span class="timestamp">Aujourd'hui 10:53</span></div>
                        <div class="messagebox"><span class="author">test</span><div class="messageother"><span class="message">test</span></div><span class="timestamp">Aujourd'hui 10:53</span></div>
                        <div class="messagebox"><span class="author">test</span><div class="messageother"><span class="message">test</span></div><span class="timestamp">Aujourd'hui 10:53</span></div>
                        <div class="messagebox"><span class="self">test</span><div class="messageself"><span class="message">C'est le test</span></div><span class="timestampself">Aujourd'hui 10:53</span></div>
                    </div>
                    <div class="chatmessage">
                        <textarea cols="100%" type="text" placeholder="Entrez votre message" ></textarea>
                    </div>
                </div>
            </div>
        </section>
        
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
    </div>
</body>
</html>