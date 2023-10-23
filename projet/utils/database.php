<?php 
$dbname = 'memory';
$host = 'localhost';
$dsn = "mysql:dbname=$dbname;host=$host;charset=utf8";
$user = 'root';
$pass = '';

$driver_options = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
];

try {
$pdo = new PDO($dsn, $user, $pass, $driver_options);
return $pdo;
} catch (PDOException $e) {
echo 'La connexion à la base de données a échouée.';
}

$pdo = connectToDbAndGetPdo();
$pdoStatement = $pdo->prepare('INSERT INTO user (email, password, nickName) VALUES
(:email, :password, :nickName)');
$userHasBeenInserted = $pdoStatement->execute([
':email' => $email,
':password' => hashPassword($password),
':nickName' => $nickName,
]);
?>
