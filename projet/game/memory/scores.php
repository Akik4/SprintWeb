<?php
$navColor = "scoresPage";
include '../../utils/common.php';
require '../../partials/header.php';

use utils\Header;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/footer.css">
    <link rel="stylesheet" href="../../../assets/css/main.css">
    <link rel="stylesheet" href="../../../assets/css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Accueil</title>
</head>

<body>
    <div class="score">
        <div class="filter">
            <div>
                <?php echo Header::addClassic(3, "SCORES"); ?>
            </div>
            <div class="nav-page-title">
                <h1> SCORE </h1>
            </div>
        </div>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand">Navbar</a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
                    <input class="btn btn-outline-success" type="submit" name="submit">Search
                </form>
            </div>
        </nav>

        <div class="body">
            <!-- <div class="tab"> -->
            <?php

            include "../../utils/database.php";
            $db = dataconnect();
            $request = $db->query('SELECT DISTINCT user.nickname, difficulty, points, date_played  FROM score INNER JOIN user ON user.id = score.user_id')->fetchALL();
            print_r($request);
            foreach ($request as $req => $reqs) {
                print_r($reqs->nickname);
                $l = $reqs->nickname;
                if ($_GET['search'] === $l) {
            ?>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Description</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><?= $l ?></td>
                            <td><?= $reqs->difficulty ?></td>
                            <td><?= $l ?></td>
                            <td><?= $l ?></td>
                        </tr>

                    </table>
            <?php
                }
            };
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Utilisateur</th>
                        <th>Niveau de difficulté</th>
                        <th>Points</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>


                    <?php $users = $db->query('SELECT DISTINCT user.nickname, difficulty, points, date_played  FROM score INNER JOIN user ON user.id = score.user_id')->fetchALL(); ?>
                    <br>
                    <br>
                    <?php foreach ($users as $user => $username) : ?>
                        <br>
                        <br>
                        <!-- <?php print_r($user) ?> -->
                        <!-- <?php print_r($username) ?> -->

                        <tr>
                            <td> <?= $username->nickname ?> </td>
                            <td> <?= $username->difficulty ?> </td>
                            <td> <?= $username->points ?> </td>
                            <td> <?= $username->date_played ?> </td>
                        </tr>
                    <?php endforeach; ?>


                    <!-- <tr>
                        <td>Stefan</td>
                        <td>2Min50</td>
                        <td>50</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Stefan</td>
                        <td>2Min50</td>
                        <td>50</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Stefan</td>
                        <td>2Min50</td>
                        <td>50</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Stefan</td>
                        <td>2Min50</td>
                        <td>50</td>
                        <td>2</td>
                    </tr> -->
                </tbody>
            </table>
            <!-- </div> -->
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