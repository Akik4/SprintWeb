<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/header.css">
    <title>Accueil</title>
</head>
<body>
    <main class="main">
        <!-- section 1: hero banner  -->
        <section class="heroBanner">
            <div class="darkFilter">
                <div class="theHs">
                    <div>
                        <div class="header">
                            <nav class="navbar">
                                <div class="space"></div>
                                <div class="title">
                                    <ul class="nav-element">
                                        <img src="./assets/img/Fichier 1.png" height="30px" width="30px">
                                        <li>The Power Of Memory</li>
                                    </ul>
                                </div>
                                <div class="list">
                                    <ul class="nav-element">
                                        <li class="list-active">ACCUEIL</li>
                                        <li class="list-inactive" onclick="window.location='../game_preview'">JEU</li>
                                        <li class="list-inactive" onclick="window.location='../score/'">SCORE</li>
                                        <li class="list-inactive" onclick="window.location='../contact/'">NOUS CONTACTER</li>
                                    </ul>
                                </div>
                                <div class="nav-login">
                                    <button><img src="./assets/img/login.png" height="20px" width="20px" onclick="window.location = './login/'"></button>
                                </div>
                                <div class="space"><input type="checkbox" id="darkMode" class="checkbox">
                                    <label for="darkMode" ><img class="png" src="/assets/img/nuit.png" alt=""> </label></div>
                            </nav>
                        </div>
                    </div>
                </div>
                 <div class="center">
                <h1 class="titlePage"> <span class="animTitle">B</span>ienvenue dans notre Studio !</h1>
                <p class="sousTitle">Venez challenger les cerveaux les plus agiles !</p>
                <button class="playGame" onclick="window.location = './game_preview'"> Play</button>
            </div>
            </div>
        </section>
        <!-- section 1: hero banner  -->
        
        <section class="partie2">
            <div class="bgImg">

            </div>
            <div class="flex-img">
                <div class="wrapper">
                    <div class="containerA">
                        <div class="img img1"></div>
                        <div class="text text1">
                            <h1> <span class="puce">01</span>Title</h1>
                            <br> 
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum necessitatibus mollitia eaque quos totam deserunt quo rem voluptatibus recusandae, quis excepturi blanditiis qui, voluptatem doloremque magni maxime possimus, eius illum!</p> </div>
                        </div>
                <div class="containerA">
                    <div class="img img2"></div>
                    <div class="text text2">
                        <h1><span class="puce">02</span>Title</h1>
                        <br> 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum necessitatibus mollitia eaque quos totam deserunt quo rem voluptatibus recusandae, quis excepturi blanditiis qui, voluptatem doloremque magni maxime possimus, eius illum! </div>
                    </div>
                <div class="containerA">
                    <div class="img img3"></div>
                    <div class="text text3">
                        <h1><span class="puce">03</span>Title</h1>
                        <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum necessitatibus mollitia eaque quos totam deserunt quo rem voluptatibus recusandae, quis excepturi blanditiis qui, voluptatem doloremque magni maxime possimus, eius illum! </div>
                    </div>
                </div>
            </div>


        </section>

        <section class="stat">
            <div class="centerGrid">
                <div class="imgStat">
                </div>
                <div class="gridSystem">
                    <div class="case two">
                        <h1>310</h1>
                        <p>Parties Jouées</p>
                    </div>
                    <div class="case three">
                        <h1>1020</h1>
                        <p>Joueurs Connectée</p>
                    </div>
                    <div class="case five">
                        <h1>10 sec</h1>
                        <p>Temps Records</p>
                    </div>
                    <div class="case six">
                        <h1>21 300</h1>
                        <p>Joueurs Inscrits</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- partie 3 chartJs  -->
        <!-- partie 3 chartJs  -->
        <!-- partie 3 chartJs  -->
 
        <section class="partie3">
            <div class="titleGraph">
                <h1>Chart JS</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum assumenda id repellat optio maiores omnis quod rerum quas quisquam molestiae voluptas neque, ipsum, impedit error explicabo distinctio ea aliquam sequi?</p>
            </div>
            <div class="allGraph">
                
                 <div class="chartJS">
                <canvas id="myChart"></canvas>   
            </div>
            <div class="chartJS">
                <canvas id="myChart2"></canvas> 
            </div>
            </div>
        </section>    
        <!-- partie 3 chartJs  -->
        <!-- partie 3 chartJs  -->
        <!-- partie 3 chartJs  -->
    
        <section class="partie4">
            <div class="titleSection4">
                 <h1>Notre équipe</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris luctus sagittis eros quis ultrices </p>
            </div>
            <div class="wrapper">
                 <div class="container1A">
                    <div class="containerPdp p1">
                        <div class="pdpProfil1"></div>
                    </div>
                <div class="infoUser">
                    <h1>Stefan</h1>
                    <p>Games Developper</p>
                     <div class="allBtn">
                     <button class="res"><img src="/assets/img/facebookA.png" alt=""></button>
                    <button class="res"><img src="/assets/img/instagramA.png" alt=""></button>
                    <button class="res"><img src="/assets/img/twitterA.png" alt=""></button>    
                </div> 
                </div>
                </div>
        
            <div class="container1A">
                <div class="containerPdp">
                    <div class="pdpProfil1 p2"></div>
                </div>
                 <div class="infoUser">
                    <h1>GrandBidule</h1>
                    <p>Games Designer</p>
                    <div class="allBtn">
                        <button class="res"><img src="/assets/img/facebookA.png" alt=""></button>
                       <button class="res"><img src="/assets/img/instagramA.png" alt=""></button>
                       <button class="res"><img src="/assets/img/twitterA.png" alt=""></button>    
                   </div> 
                </div>    
            </div> 
            <div class="container1A">
                <div class="containerPdp">
                    <div class="pdpProfil1 p3"></div>
                </div>  
                <div class="infoUser">
                    <h1>Nathan</h1>
                    <p>Games Developper</p>
                    <div class="allBtn">
                        <button class="res"><img src="/assets/img/facebookA.png" alt=""></button>
                       <button class="res"><img src="/assets/img/instagramA.png" alt=""></button>
                       <button class="res"><img src="/assets/img/twitterA.png" alt=""></button>    
                   </div> 
                </div>       
                
            </div>
            </div>
           
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
    
             "><img src="./assets/img/chatbubble.png" width="25px" height="25px"></button>
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
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script src="/assets/javascript/chart.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <script src="/assets/javascript/app.js"></script>

       
        <!-- <script src="/node_modules/animejs/lib/anime.min.js"></script> -->
    </main>
    <div class="footer">
        
        <div class="info">
            <p style="font-weight: bold;">Information</p>
            <p>Quisque commodo facilisis purus, interdum volupat arcu viverra sed.</p>
            <p><span class="footer-title">Tel:</span> 06 05 04 03 02</p>
            <p><span class="footer-title">Email:</span> support@powerofmemory.com</p>
            <p><span class="footer-title">Location:</span> Paris</p>
            <button onclick="window.location = 'https:\/\/facebook.com'"><img src="../ressources/image/facebook.png" width="20px" height="20px"></button> 
            <button onclick="window.location = 'https:\/\/x.com'"><img src="../ressources/image/twitter.png" width="20px" height="20px"></button> 
            <button onclick="window.location = 'https:\/\/google.com'"><img src="../ressources/image/google.png" width="20px" height="20px"></button> 
            <button onclick="window.location = 'https:\/\/pinterest.com'"><img src="../ressources/image/pinterest.png" width="20px" height="20px"></button> 
            <button onclick="window.location = 'https:\/\/instagram.com'"><img src="../ressources/image/Instagram.png" width="20px" height="20px"></button>  

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

</body>
</html>