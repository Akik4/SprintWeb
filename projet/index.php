<?php
include_once './utils/common.php';
require_once './partials/header.php';

use utils\Header;

?>
<?php require_once './partials/head.php' ?>

<body>
    <main class="main">
        <!-- section 1: hero banner  -->
        <section class="heroBanner">
            <div class="darkFilter">
                <?php echo Header::add(1); ?>
                <div class="center">
                    <h1 class="titlePage"> <span class="animTitle">B</span>ienvenue dans notre Studio !</h1>
                    <p class="sousTitle">Venez challenger les cerveaux les plus agiles !</p>
                    <button class="playGame" onclick="window.location = 'game/memory/game_select.php'"> Play</button>
                </div>
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum necessitatibus mollitia eaque quos totam deserunt quo rem voluptatibus recusandae, quis excepturi blanditiis qui, voluptatem doloremque magni maxime possimus, eius illum!</p>
                        </div>
                    </div>
                    <div class="containerA">
                        <div class="img img2"></div>
                        <div class="text text2">
                            <h1><span class="puce">02</span>Title</h1>
                            <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum necessitatibus mollitia eaque quos totam deserunt quo rem voluptatibus recusandae, quis excepturi blanditiis qui, voluptatem doloremque magni maxime possimus, eius illum!
                        </div>
                    </div>
                    <div class="containerA">
                        <div class="img img3"></div>
                        <div class="text text3">
                            <h1><span class="puce">03</span>Title</h1>
                            <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum necessitatibus mollitia eaque quos totam deserunt quo rem voluptatibus recusandae, quis excepturi blanditiis qui, voluptatem doloremque magni maxime possimus, eius illum!
                        </div>
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
                        <h1>
                        <?php
                            include_once "./utils/database.php";
                            $db = dataconnect();

                            $result = $db->query("SELECT count(id) FROM score")->fetch();
                            foreach ($result as $row) {
                                echo $row;
                            }
                            ?>
                        </h1>
                        <p>Parties Jouées</p>
                    </div>
                    <div class="case three">

                        <h1><?php echo (sizeof(scandir(session_save_path()))) - 2; ?></h1>
                        <p>Joueurs Connectée</p>
                    </div>
                    <div class="case five">
                        <h1><?php
                            $result = $db->query("SELECT min(points) FROM score")->fetch();
                            foreach ($result as $row) {
                                echo $row;
                            }
                            ?>sec</h1>
                        <p>Temps Records</p>
                    </div>
                    <div class="case six">
                        <h1><?php
                            $result = $db->query("SELECT count(id) FROM user")->fetch();
                            foreach ($result as $row) {
                                echo $row;
                            }
                            ?></h1>
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
                            <button class="res"><img src="../assets/img/facebookA.png" alt=""></button>
                            <button class="res"><img src="../assets/img/instagramA.png" alt=""></button>
                            <button class="res"><img src="../assets/img/twitterA.png" alt=""></button>
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
                            <button class="res"><img src="../assets/img/facebookA.png" alt=""></button>
                            <button class="res"><img src="../assets/img/instagramA.png" alt=""></button>
                            <button class="res"><img src="../assets/img/twitterA.png" alt=""></button>
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
                            <button class="res"><img src="../assets/img/facebookA.png" alt=""></button>
                            <button class="res"><img src="../assets/img/instagramA.png" alt=""></button>
                            <button class="res"><img src="../assets/img/twitterA.png" alt=""></button>
                        </div>
                    </div>

                </div>
            </div>

           <?php require_once "./chat.php";?>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="../assets/javascript/chart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <script src="../assets/javascript/app.js"></script>
        <!-- <script src="/node_modules/animejs/lib/anime.min.js"></script> -->
    </main>
    <?php require './partials/footer.php' ?>

</body>

</html>