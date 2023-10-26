<?php
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
        </div>
        <div class="body">
            <form class="d-flex" role="search">
                <input type="search" class="btn btnsearch" data-bs-toggle="modal" data-bs-target="#exampleModal" placeholder="Search User" aria-label="Search">
            </form>
            <!-- </button> -->
            <style>
                .btnsearch {
                    position: absolute;
                    width: 25%;
                    left: 38%;
                    top: 25%;
                }
            </style>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Search User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
                                <input class="btn btn-outline-success" type="submit" name="submit">Search
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>






            <div class="pop">

                <?php
                include "../../utils/database.php";
                $DB = dataconnect();
                if (isset($_GET['submit'])) {
                    $str = $_GET['search'];
                    // print_r($str);
                    $request = $DB->query("SELECT DISTINCT user.nickname, difficulty, points, date_played  FROM score INNER JOIN user ON user.id = score.user_id WHERE nickname like '%$str%' ")->fetchALL();
                    if ($_GET['search']) {
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
                        </table>

                        <?php
                        foreach ($request as $req => $reqs) {
                            $l = $reqs->nickname;
                        ?>
                            <table style="width: 100%;">
                                <tr>
                                    <td><?= $reqs->nickname ?></td>
                                    <td><?= $reqs->difficulty ?></td>
                                    <td><?= $reqs->points ?></td>
                                    <td><?= $reqs->date_played ?></td>
                                </tr>
                            </table>
                        <?php
                        }
                    } else {
                        ?>
                        veuillez rechercher un utilisateur
                    <?php
                    }
                } else {
                    ?>

                <?php
                }
                ?>
                <table class=" table1 <?php if (isset($_GET['submit'])) :  ?>non <?php endif ?>" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Utilisateur</th>
                            <th>Niveau de difficulté</th>
                            <th>Points</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $users = $DB->query('SELECT DISTINCT user.nickname, difficulty, points, date_played  FROM score INNER JOIN user ON user.id = score.user_id ORDER BY points DESC')->fetchALL(); ?>
                        <?php foreach ($users as $user => $username) : ?>
                            <tr>
                                <td> <?= $username->nickname ?> </td>
                                <td> <?= $username->difficulty ?> </td>
                                <td> <?= $username->points ?> </td>
                                <td> <?= $username->date_played ?> </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            </div>
            <?php require_once "../../chat.php"?>


            <?php require '../../partials/footer.php' ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <script src="../assets/javascript/app.js"></script>
    </div>
</body>

</html>