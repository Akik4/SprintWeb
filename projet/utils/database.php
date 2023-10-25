<?php
// require_once("./common.php");

function dataconnect()
{
    $dbname = 'memory';
    $host = 'localhost';
    $dsn = "mysql:dbname=$dbname;host=$host;port=3307;charset=utf8";


    $user = 'root';
    $pass = '';

    $driver_options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Disable errors in the form of exceptions
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, // Make the default fetch be an associative array
    ];

    try {
        $pdo = new PDO($dsn, $user, $pass, $driver_options);
        return $pdo;
    } catch (PDOException $e) {
        echo 'La connexion à la base de données a échouée.';
    }
}