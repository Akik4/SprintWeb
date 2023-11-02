<?php
include_once './utils/common.php';
require_once './partials/header.php';

use utils\Header;

?>
<?php require_once './partials/head.php' ?>

<body style="background: #100E2E;">
    <div class="filter">
        <?php echo Header::addClassic(5, "Shop"); ?>
    </div>

    <?php
    require_once("./utils/database.php");
    $DB = dataconnect();

    $addThemes = $DB->prepare("SELECT id, scorePoints FROM user where id = :user_id");
    $addThemes->bindParam(':user_id', $_SESSION['id'], PDO::PARAM_INT);

    $addThemes2 = $DB->prepare("SELECT price FROM shop");

    $addThemes->execute();
    $addThemes2->execute();
    $user6 = $addThemes->fetch();
    $user7 = $addThemes2->fetch();

    if (isset($_POST['kiwiJaune'])) {
        if ($user6->scorePoints >= $user7->price) {
            $_SESSION['scorePoints'] = $user6->scorePoints - $user7->price;
            //mettre dans la base de donnée les themes que l'utilisateur a acheté 
            // crée une colonne dans la base de donnée pour le nom du produit acheté
            $_SESSION['product_name'] = $user7->product_name;
            // $addNewTheme = $DB->prepare("ALTER user ADD Newtheme VARCHAR(255)");
            // $addNewTheme->execute();
            $price = $DB->prepare("UPDATE user SET scorePoints = :score_points WHERE id = :user_id");
            $price->bindParam(':score_points', $_SESSION['scorePoints'], PDO::PARAM_INT);
            $price->bindParam(':user_id', $_SESSION['id'], PDO::PARAM_INT);
            $price->execute();
        } else {
            //         $moneyAlert = <<<HTML
            //         <div class="alert alert-danger d-flex align-items-center" role="alert">
            //   <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            //   <div>
            //     Vous etes pauvre, vous n'avez pas assez de argent pour acheter ce theme
            //   </div>
            // </div>
            // HTML;
        }
    } else {
        // echo 'pas de kiwi';
    }
    ?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: rgba(108, 92, 231,1.0);">
                <div class="modal-body ">
                    <p class="text-light">
                        Theme Memory Game Astronautes: 300 CT
                    </p>
                    <br>
                    <p class="text-light">Price: 300 CT <br>CodingToken <?php echo $_SESSION['scorePoints'] ?> <br> Restant: <?php echo  $_SESSION['scorePoints'] - 300 ?> </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" style="background-color: rgba(214, 48, 49,1.0);" data-bs-dismiss="modal">Close</button>
                    <form method="POST" action="shop.php">
                        <input type="submit" name="kiwiJaune" role="button" value="Buy Now" class="btn btnAddTheme" style="background-color: rgba(162, 155, 254,1.0);">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h1 class="titleTheme">ALL THEME</h1>
    <style>
        .titleTheme {
            margin: 3%;
            text-align: center;
            color: #FFF;
            font-family: Roboto;
            font-size: 40px;
            font-style: normal;
            font-weight: 800;
            line-height: 138.687%;
            /* 55.475px */
            letter-spacing: 3.4px;
            text-transform: uppercase;
        }
    </style>
    <!-- <?php echo $moneyAlert ?> -->
    <?php
    // $priceItemShops = $DB->query("SELECT price FROM shop")->fetchAll();
    // foreach ($priceItemShops as $k => $priceItemShop) {
    //     var_dump($priceItemShops);
    //     echo "<br>";
    //     var_dump($priceItemShop);
    //     echo "<br>";
    //     var_dump($k + 2);
    //     var_dump($priceItemShop);

    ?>
    <div class="container d-flex justify-content-center">
        <div class="container text-center">
            <div class="row">
                <div class="col d-flex justify-content-center ">
                    <div class="card m-3 border border-0" style="width: 18rem">
                        <img src="../assets/img/9900_3_2_05.jpg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#exampleModal" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Theme memory game Astronautes </h5>
                            <div class="container d-flex justify-content-between">
                                <a href="#" class="btn "><svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" viewBox="0 0 21 18" fill="none">
                                        <path d="M5.25 0C3.80625 0 2.52 0.603414 1.54875 1.54789C0.60375 2.49236 0 3.7779 0 5.24708C0 6.69002 0.60375 7.97556 1.54875 8.94627L10.5 17.8925L19.4513 8.94627C20.3962 8.00179 21 6.71626 21 5.24708C21 3.80413 20.3962 2.5186 19.4513 1.54789C18.5063 0.603414 17.22 0 15.75 0C14.3062 0 13.02 0.603414 12.0487 1.54789C11.1038 2.49236 10.5 3.7779 10.5 5.24708C10.5 3.80413 9.89625 2.5186 8.95125 1.54789C8.00625 0.603414 6.72 0 5.25 0Z" fill="black" />
                                    </svg>2235</a>
                                <a href="#" style=" background: #100E2E; color: white; " class="btn rounded-pill position-relative z-3">300<img style="border-radius: 50%; margin-left: 4px" src="../assets//img/Fichier 2.png" alt="" width="25px" height="25px"></a>
                                <svg class="position-absolute" style="top: 69%; left:0; z-index: 1;" xmlns="http://www.w3.org/2000/svg" width="18rem" height="139" viewBox="0 0 335 139" fill="">
                                    <path d="M112 116.347C52 138.347 12.3333 86.514 0 57.8473C0 79.514 0.1 124.147 0.5 129.347C0.9 134.547 6.33333 137.514 9 138.347H327C331.8 138.347 335 131.5 335 129V0.5C333.5 1 324.2 1.54733 297 66.3473C269.8 131.147 233.667 124.681 219 113.347C208.333 105.181 172 94.3473 112 116.347Z" fill="#FFA49D" />
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card m-3 border border-0" style="width: 18rem;">
                        <img src="../assets/img/ninjaShop.jpg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#exampleModal" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Theme memory game Ninja </h5>
                            <br>
                            <div class="container d-flex justify-content-between">
                                <a href="#" class="btn "><svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" viewBox="0 0 21 18" fill="none">
                                        <path d="M5.25 0C3.80625 0 2.52 0.603414 1.54875 1.54789C0.60375 2.49236 0 3.7779 0 5.24708C0 6.69002 0.60375 7.97556 1.54875 8.94627L10.5 17.8925L19.4513 8.94627C20.3962 8.00179 21 6.71626 21 5.24708C21 3.80413 20.3962 2.5186 19.4513 1.54789C18.5063 0.603414 17.22 0 15.75 0C14.3062 0 13.02 0.603414 12.0487 1.54789C11.1038 2.49236 10.5 3.7779 10.5 5.24708C10.5 3.80413 9.89625 2.5186 8.95125 1.54789C8.00625 0.603414 6.72 0 5.25 0Z" fill="black" />
                                    </svg>1400</a>
                                <a href="#" style=" background: #100E2E; color: white; " class="btn rounded-pill position-relative z-3">300<img style="border-radius: 50%; margin-left: 4px" src="../assets//img/Fichier 2.png" alt="" width="25px" height="25px"></a>
                                <svg class="position-absolute" style="top: 69%; left:0; z-index: 1;" xmlns="http://www.w3.org/2000/svg" width="18rem" height="139" viewBox="0 0 335 139" fill="none">
                                    <path d="M112 116.347C52 138.347 12.3333 86.514 0 57.8473C0 79.514 0.1 124.147 0.5 129.347C0.9 134.547 6.33333 137.514 9 138.347H327C331.8 138.347 335 131.5 335 129V0.5C333.5 1 324.2 1.54733 297 66.3473C269.8 131.147 233.667 124.681 219 113.347C208.333 105.181 172 94.3473 112 116.347Z" fill="#e2e1ef" />
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card m-3 border border-0" style="width: 18rem;">
                        <img src="../assets/img/pandaShop.jpg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#exampleModal" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Theme memory game Animals </h5>
                            <div class="container d-flex justify-content-between">
                                <a href="#" class="btn "><svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" viewBox="0 0 21 18" fill="none">
                                        <path d="M5.25 0C3.80625 0 2.52 0.603414 1.54875 1.54789C0.60375 2.49236 0 3.7779 0 5.24708C0 6.69002 0.60375 7.97556 1.54875 8.94627L10.5 17.8925L19.4513 8.94627C20.3962 8.00179 21 6.71626 21 5.24708C21 3.80413 20.3962 2.5186 19.4513 1.54789C18.5063 0.603414 17.22 0 15.75 0C14.3062 0 13.02 0.603414 12.0487 1.54789C11.1038 2.49236 10.5 3.7779 10.5 5.24708C10.5 3.80413 9.89625 2.5186 8.95125 1.54789C8.00625 0.603414 6.72 0 5.25 0Z" fill="black" />
                                    </svg>10450</a>
                                <a href="#" style=" background: #100E2E; color: white; " class="btn rounded-pill position-relative z-3">200<img style="border-radius: 50%; margin-left: 4px" src="../assets//img/Fichier 2.png" alt="" width="25px" height="25px"></a>
                                <svg class="position-absolute" style="top: 69%; left:0; z-index: 1;" xmlns="http://www.w3.org/2000/svg" width="18rem" height="139" viewBox="0 0 335 139" fill="none">
                                    <path d="M112 116.347C52 138.347 12.3333 86.514 0 57.8473C0 79.514 0.1 124.147 0.5 129.347C0.9 134.547 6.33333 137.514 9 138.347H327C331.8 138.347 335 131.5 335 129V0.5C333.5 1 324.2 1.54733 297 66.3473C269.8 131.147 233.667 124.681 219 113.347C208.333 105.181 172 94.3473 112 116.347Z" fill="#67E8FF" />
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="container text-center">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div class="card m-3 border border-0" style="width: 18rem;">
                        <img src="../assets/img/halloweenShop.jpg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#exampleModal" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Theme memory game Halloween </h5>
                            <div class="container d-flex justify-content-between">
                                <a href="#" class="btn "><svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" viewBox="0 0 21 18" fill="none">
                                        <path d="M5.25 0C3.80625 0 2.52 0.603414 1.54875 1.54789C0.60375 2.49236 0 3.7779 0 5.24708C0 6.69002 0.60375 7.97556 1.54875 8.94627L10.5 17.8925L19.4513 8.94627C20.3962 8.00179 21 6.71626 21 5.24708C21 3.80413 20.3962 2.5186 19.4513 1.54789C18.5063 0.603414 17.22 0 15.75 0C14.3062 0 13.02 0.603414 12.0487 1.54789C11.1038 2.49236 10.5 3.7779 10.5 5.24708C10.5 3.80413 9.89625 2.5186 8.95125 1.54789C8.00625 0.603414 6.72 0 5.25 0Z" fill="black" />
                                    </svg>6547</a>
                                <a href="#" style=" background: #100E2E; color: white; " class="btn rounded-pill position-relative z-3">300<img style="border-radius: 50%; margin-left: 4px" src="../assets//img/Fichier 2.png" alt="" width="25px" height="25px"></a>
                                <svg class="position-absolute" style="top: 69%; left:0; z-index: 1;" xmlns="http://www.w3.org/2000/svg" width="18rem" height="139" viewBox="0 0 335 139" fill="none">
                                    <path d="M112 116.347C52 138.347 12.3333 86.514 0 57.8473C0 79.514 0.1 124.147 0.5 129.347C0.9 134.547 6.33333 137.514 9 138.347H327C331.8 138.347 335 131.5 335 129V0.5C333.5 1 324.2 1.54733 297 66.3473C269.8 131.147 233.667 124.681 219 113.347C208.333 105.181 172 94.3473 112 116.347Z" fill="#C891FF" />
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card m-3 border border-0" style="width: 18rem;">
                        <img src="../assets/img/catShop.jpg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#exampleModal" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Theme memory game Node >> PHP </h5>
                            <div class="container d-flex justify-content-between">
                                <a href="#" class="btn "><svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" viewBox="0 0 21 18" fill="none">
                                        <path d="M5.25 0C3.80625 0 2.52 0.603414 1.54875 1.54789C0.60375 2.49236 0 3.7779 0 5.24708C0 6.69002 0.60375 7.97556 1.54875 8.94627L10.5 17.8925L19.4513 8.94627C20.3962 8.00179 21 6.71626 21 5.24708C21 3.80413 20.3962 2.5186 19.4513 1.54789C18.5063 0.603414 17.22 0 15.75 0C14.3062 0 13.02 0.603414 12.0487 1.54789C11.1038 2.49236 10.5 3.7779 10.5 5.24708C10.5 3.80413 9.89625 2.5186 8.95125 1.54789C8.00625 0.603414 6.72 0 5.25 0Z" fill="black" />
                                    </svg>3M</a>
                                <a href="#" style=" background: #100E2E; color: white; " class="btn rounded-pill position-relative z-3">350<img style="border-radius: 50%; margin-left: 4px" src="../assets//img/Fichier 2.png" alt="" width="25px" height="25px"></a>
                                <svg class="position-absolute" style="top: 69%; left:0; z-index: 1;" xmlns="http://www.w3.org/2000/svg" width="18rem" height="139" viewBox="0 0 335 139" fill="none">
                                    <path d="M112 116.347C52 138.347 12.3333 86.514 0 57.8473C0 79.514 0.1 124.147 0.5 129.347C0.9 134.547 6.33333 137.514 9 138.347H327C331.8 138.347 335 131.5 335 129V0.5C333.5 1 324.2 1.54733 297 66.3473C269.8 131.147 233.667 124.681 219 113.347C208.333 105.181 172 94.3473 112 116.347Z" fill="#84FBFF" />
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card m-3 border border-0" style="width: 18rem;">
                        <img src="../assets/img/foodShop.jpg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#exampleModal" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Theme memory game Food </h5>
                            <br>
                            <div class="container d-flex justify-content-between">
                                <a href="#" class="btn "><svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" viewBox="0 0 21 18" fill="none">
                                        <path d="M5.25 0C3.80625 0 2.52 0.603414 1.54875 1.54789C0.60375 2.49236 0 3.7779 0 5.24708C0 6.69002 0.60375 7.97556 1.54875 8.94627L10.5 17.8925L19.4513 8.94627C20.3962 8.00179 21 6.71626 21 5.24708C21 3.80413 20.3962 2.5186 19.4513 1.54789C18.5063 0.603414 17.22 0 15.75 0C14.3062 0 13.02 0.603414 12.0487 1.54789C11.1038 2.49236 10.5 3.7779 10.5 5.24708C10.5 3.80413 9.89625 2.5186 8.95125 1.54789C8.00625 0.603414 6.72 0 5.25 0Z" fill="black" />
                                    </svg>1245</a>
                                <a href="#" style=" background: #100E2E; color: white; " class="btn rounded-pill position-relative z-3">250<img style="border-radius: 50%; margin-left: 4px" src="../assets//img/Fichier 2.png" alt="" width="25px" height="25px"></a>
                                <svg class="position-absolute" style="top: 69%; left:0; z-index: 1;" xmlns="http://www.w3.org/2000/svg" width="18rem" height="139" viewBox="0 0 335 139" fill="none">
                                    <path d="M112 116.347C52 138.347 12.3333 86.514 0 57.8473C0 79.514 0.1 124.147 0.5 129.347C0.9 134.547 6.33333 137.514 9 138.347H327C331.8 138.347 335 131.5 335 129V0.5C333.5 1 324.2 1.54733 297 66.3473C269.8 131.147 233.667 124.681 219 113.347C208.333 105.181 172 94.3473 112 116.347Z" fill="#FAE192" />
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </div>


    <h1>CODING TOKEN</h1>



    <?php
    require './partials/footer.php';
    ?>


</body>