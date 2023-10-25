<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Document</title>
</head>


<?php
$con = new mysqli('localhost', 'root', '', 'chut');
$query = $con->query(" SELECT points FROM score");

foreach ($query as $data) {
    $month[] = $data['points'];
    // $amount[] = $data['amount'];
}
?>


<body class="test">
    <div class="containerS1">
        <div class="sidebatProfil">
            <div class="pdpProfil"></div>
            <h1>Grand Bidule</h1>
            <div class="listPara">
                <ul class="serlkvnsrelkb">
                    <li class="params1 active"><a class="aStatus" href="#profil"><img class="imgStatus" src="../assets/img/profil.png" alt=""><span>Profil</span> </a></li>
                    <li class="params1"> <a class="aStatus" href="#stat"><img class="imgStatus" src="../assets/img/statistique.png" alt=""> Statistique</a></li>
                    <li class="params1"><a class="aStatus" href="#"><img class="imgStatus" src="../assets/img/parametres.png" alt=""> Logout</a></li>
                    <!-- <li class="params1">Home</li> -->
                </ul>
            </div>
        </div>
        <div class="containerS2">
            <div class="result">
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
                    <!-- <div class="imgChange"></div> -->
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
    <!-- <script src="../assets/javascript/profilChart.js"></script> -->
    <script>
        let graph = document.getElementById('graph').getContext('2d');
        let graph1 = document.getElementById('graph1').getContext('2d');
        let graph2 = document.getElementById('graph2').getContext('2d');

        let graphData = {
            labels: ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "Sunday"],
            datasets: [{
                label: "temps de jeu sur les 7 derniers jours",
                data: <?php echo json_encode($month) ?>,
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
    </script>
</body>

</html>