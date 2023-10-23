<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Document</title>
</head>
<body class="test">
    <div class="containerS1">
        <div class="sidebatProfil">
            <div class="pdpProfil"></div>
            <h1>Grand Bidule</h1>
            <div class="listPara">
                <ul class="serlkvnsrelkb">
                    <li class="params1 active"><a class="aStatus" href="#profil"><img class="imgStatus"src="/assets/img/profil.png" alt=""><span>Profil</span> </a></li>
                    <li class="params1"> <a class="aStatus" href="#stat"><img class="imgStatus"src="/assets/img/statistique.png" alt=""> Statistique</a></li>
                    <li class="params1"><a class="aStatus" href="#"><img class="imgStatus"src="/assets/img/parametres.png" alt=""> Logout</a></li>
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
                        <input  type="text" class ="inputStatus">
                        <p class="para margin">You can remove it at any time.</p>
                        <h3>Public email</h3>
                        <input class ="inputStatus" type="email" >
                        <p class="para margin">You have set your email address to private.</p>
                        <h2>Bio</h2>
                        <textarea class="TaS" name="bio" id="" cols="30" rows="10"></textarea>
                        <p class="para">You can @mention other users and organizations to link to them.</p>
                    </div>
                    <!-- <div class="imgChange"></div> -->
                 </div>
                 <div  id="stat" class="statc">
                    <h1 style="text-align: center; background: white;;">Statistique sur les 7 derniers jours</h1>
                    <div class="container24">
                        <div class="containerS">
                        <canvas id="graph"></canvas>   
                        </div>
                        <h2 style="padding: 3%;">Game Won</h2>
                        <div class="containerGraph">  
                                <canvas id="graph1"></canvas>  
                                <canvas id="graph2"></canvas>   
                        </div>
                    </div>
                    </div>
                 </div>
                 
            </div>
           

        </div>
    </div>
   <script src="/assets/javascript/profilChart.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
   <script src="../assets/javascript/app.js"></script>
</body>
</html>