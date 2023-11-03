<?php
require_once '../projet/utils/common.php';

use utils\Header;

$con = dataconnect();

if (isset($_POST["submit"])) {
    if (isset($_FILES["photo"])) {
        $name = $_FILES["photo"]["name"];
        $newFolder = chdir('upload');
        $upload_dir = getcwd();
        move_uploaded_file($_FILES['photo']["tmp_name"], $upload_dir . "/$name");
        $editProfil = $con->prepare("UPDATE user set imgPdp = :picture where id = :id");
        $editProfil->execute(
            [
                ":picture" => $name,
                ":id" => $_SESSION['id'],
            ]
        );
    } else {
        echo 'veuillez sélectionnez une image';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Profil</title>
</head>

<?php

$query = $con->prepare(" SELECT points FROM score");
$query->execute();
$result = $query->fetchAll();

foreach ($result as $data) {
    $month[] = $data->points;
    // $amount[] = $data['amount'];
}

if (!isset($name)) {
    // $getPP = $con->prepare("SELECT * from user where id = :id");
    $name = $_SESSION['imgPdp'];
}
?>

<body class="test">

    <div class="containerS1">
        <div class="sidebatProfil">
            <div class="pdpProfil">
                <form id="formPdpProfil" action="" method="POST" enctype="multipart/form-data">
                    <input type="file" name="photo" id="fileUpload">
                    <style>
                        #fileUpload {
                            display: none;
                        }

                        #formPdpProfil {
                            padding-bottom: 30px;
                        }
                    </style>
                    <label for="fileUpload">
                        <img class="pdpProfil2" data-bs-toggle="tooltip" data-bs-title="Sélectionnez une image" src="<?php if (isset($_POST["submit"])) {
                                                                                                                            echo "upload/$name";
                                                                                                                        } else { ?>../assets/img/<?= $_SESSION['imgPdp'] ?> <?php   } ?> ">
                        <!-- // a revoir -->
                    </label>
                    <input id="btnProfilImg" type="submit" name="submit" value="Upload">
                    <style>
                        #btnProfilImg {
                            width: 100%;
                            cursor: pointer;
                            background: #697ed3;
                        }

                        #btnProfilImg:hover {
                            color: white;
                        }
                    </style>
                </form>
                <h1><?= $_SESSION['Pseudo'] ?> </h1>

            </div>
            <br>
            <h1><?php if (isset($_SESSION['pseudo'])) {
                    $_SESSION['pseudo'];
                } ?></h1>
            <div class="listPara">
                <ul class="serlkvnsrelkb">
                    <li class="params1 active"><a class="aStatus" href="#profil"><img class="imgStatus" src="../assets/img/profil.png" alt=""><span>Profil</span> </a></li>
                    <li class="params1"> <a class="aStatus" href="#stat"><img class="imgStatus" src="../assets/img/statistique.png" alt=""> Statistique</a></li>
                    <li class="params1"> <a class="aStatus" href="change_email.php"><img class="imgStatus" src="../assets/img/statistique.png" alt=""> E-mail</a></li>
                    <li class="params1"> <a class="aStatus" href="change_password.php"><img class="imgStatus" src="../assets/img/statistique.png" alt=""> Passwords</a></li>
                    <li class="params1"><a class="aStatus" href="disconnect.php"><img class="imgStatus" src="../assets/img/parametres.png" alt=""> Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="containerS2">
            <div class="result">
                <!-- header  -->
                <!-- header  -->
                <!-- header  -->
                <div class="filterAccount">
                    <style>
                        .filterAccount {
                            width: 100%;
                            background: #A29BFE;
                            height: auto;
                        }
                    </style>

                    <div class="header">
                        <nav class="navbar">
                            <div class="space"></div>
                            <div class="title">
                                <ul class="nav-element">
                                    <img src="<?php echo PROJECT_FOLDER ?>../assets/img/Fichier 1.png" height="30px" width="30px">
                                    <li>The Power Of Memory</li>
                                </ul>
                            </div>
                            <div class="list">
                                <ul class="nav-element">
                                    <li class="<?php $t = $active == 1 ? 'list-active' : 'list-inactive';
                                                echo $t; ?>" onclick="window.location='<?php echo PROJECT_FOLDER; ?>index.php'">ACCUEIL</li>
                                    <li class="<?php $t = $active == 2 ? 'list-active' : 'list-inactive';
                                                echo $t; ?>" onclick="window.location='<?php echo PROJECT_FOLDER; ?>game/memory/mode_ant.php'">JEU</li>
                                    <li class="<?php $t = $active == 3 ? 'list-active' : 'list-inactive';
                                                echo $t; ?>" onclick="window.location='<?php echo PROJECT_FOLDER; ?>game/memory/scores.php'">SCORE</li>
                                    <li class="<?php $t = $active == 4 ? 'list-active' : 'list-inactive';
                                                echo $t; ?>" onclick="window.location='<?php echo PROJECT_FOLDER; ?>contact.php'">NOUS CONTACTER</li>
                                    <button class="btnPremium"> <svg viewBox="0 0 576 512" height="1em" class="logoIcon">
                                            <path d="M309 106c11.4-7 19-19.7 19-34c0-22.1-17.9-40-40-40s-40 17.9-40 40c0 14.4 7.6 27 19 34L209.7 220.6c-9.1 18.2-32.7 23.4-48.6 10.7L72 160c5-6.7 8-15 8-24c0-22.1-17.9-40-40-40S0 113.9 0 136s17.9 40 40 40c.2 0 .5 0 .7 0L86.4 427.4c5.5 30.4 32 52.6 63 52.6H426.6c30.9 0 57.4-22.1 63-52.6L535.3 176c.2 0 .5 0 .7 0c22.1 0 40-17.9 40-40s-17.9-40-40-40s-40 17.9-40 40c0 9 3 17.3 8 24l-89.1 71.3c-15.9 12.7-39.5 7.5-48.6-10.7L309 106z"></path>
                                        </svg> GO PREMIUM</button>
                                    <style>
                                        .btnPremium {
                                            background: linear-gradient(to right, #bf953f, #fcf6ba, #b38728, #fbf5b7, #aa771c);
                                            background-size: 200% 200%;
                                            font-size: 0.8em;
                                            color: rgb(121, 103, 3);
                                            border: none;
                                            font-weight: 600;
                                            font-weight: 600;
                                            border-radius: 40px;
                                            padding: 1%;
                                            width: 151px;
                                            margin-right: 7px;
                                        }

                                        .logoIcon path {
                                            fill: rgb(121, 103, 3);
                                        }
                                    </style>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="home">
                    <div class="profil" id="profil">
                        <h1>Public profile</h1>
                        <hr class="margin border">
                        <h3>Name</h3>
                        <input type="text" class="inputStatus">
                        <p class="para margin">You can remove it at any time.</p>
                        <h3>Public email</h3>
                        <input class="inputStatus" type="email">
                        <p class="para margin">You have set your email address to private.</p>
                        <h2>Bio</h2>
                        <textarea class="TaS" name="bio" id="" cols="30" rows="10"></textarea>
                        <p class="para">You can @mention other users and organizations to link to them.</p>
                    </div>
                </div>
                <div id="stat" class="statc">
                    <h1 style="text-align: center; background: #f1f5f9;;">Statistique sur les 7 derniers jours</h1>
                    <div class="container24">
                        <div class="containerS">
                            <canvas id="graph"></canvas>
                        </div>
                        <div class="containerGraph">
                            <div class="containerGraph1">
                                <canvas id="graph1"></canvas>
                            </div>
                            <div class="containerGraph2">
                                <canvas id="graph2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    </div>
    <script>
        //tooltip
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        //tooltip


        //chartJs
        //chartJs
        let graph = document.getElementById('graph').getContext('2d');
        let graph1 = document.getElementById('graph1').getContext('2d');
        let graph2 = document.getElementById('graph2').getContext('2d');

        let graphData = {
            labels: ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "Sunday"],
            datasets: [{
                label: "temps de jeu sur les 7 derniers jours",
                data: [230, 99],
                backgroundColor: [
                    '#fbc531',
                    '#4cd137',
                    '#e84118',
                    '#fbc531',
                    '#4cd137',
                    '#4cd137',
                    '#e84118',
                ],
            }]

        }
        let graphData1 = {
            labels: ["Won", "Loose"],
            datasets: [{
                data: [230, 99],
                backgroundColor: [
                    '#27ae60',
                    'rgba(254, 4, 4, 0.4)',

                ],
                borderColor: [
                    '#27ae60',
                    'rgba(238, 82, 83,0.8)'
                ]
            }]

        }
        let graphData2 = {
            labels: ["easy", "medium", "hard"],
            datasets: [{
                label: "Levels",
                data: [20, 34, 23],
                backgroundColor: [
                    '#4cd137',
                    '#fbc531',
                    '#e84118',
                ],
            }]

        }

        let stat = new Chart(graph, {
            type: "bar",
            data: graphData,
            options: {
                responsive: true,
            }
        })
        let statCamembert = new Chart(graph1, {
            type: "pie",
            data: graphData1,
            options: {
                responsive: true,
            }
        })
        let statCamembert2 = new Chart(graph2, {
            type: "pie",
            data: graphData2,
            options: {
                responsive: true,
            }
        })
        //chartJs
        //chartJs
    </script>
</body>

</html>