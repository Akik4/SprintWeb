<?php
include '../../utils/common.php';
require '../../partials/header.php';

use utils\Header;
?>

<?php
require '../../partials/head.php'
?>

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
            <style>
                .btnsearch {
                    position: absolute;
                    width: 25%;
                    left: 38%;
                    top: 25%;
                }
            </style>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Search User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search" autocomplete="off">
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
                        foreach ($request as $reqs) {
                        ?>
                            <table style="width: 100%;">
                                <tr>
                                    <td class="scoreBoard"><?= $reqs->nickname ?></td>
                                    <td class="scoreBoard"><?= $reqs->difficulty ?></td>
                                    <td class="scoreBoard"><?= $reqs->points ?></td>
                                    <td class="scoreBoard"><?= $reqs->date_played ?></td>
                                </tr>
                            </table>
                        <?php
                        }
                    } else {
                        ?>
                        veuillez rechercher un utilisateur
                <?php
                    }
                }
                ?>
                <table class=" table1 <?php if (isset($_GET['submit'])) : ?>non <?php endif ?>" style="width: 100%;">
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
                        <?php foreach ($users as $username) : ?>
                            <tr>
                                <td class="scoreBoard"> <?= $username->nickname ?> </td>
                                <td class="scoreBoard"> <?= $username->difficulty ?> </td>
                                <td class="scoreBoard"> <?= $username->points ?> </td>
                                <td class="scoreBoard"> <?= $username->date_played ?> </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
        <?php require '../../partials/footer.php' ?>
        <?php require_once "../../chat.php" ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <script src="../assets/javascript/app.js"></script>
    </div>
</body>

</html>