<?php

require __DIR__ . '/Classes/Config.php';
require __DIR__ . '/Classes/DBSingleton.php';

// Check if all the usefull inputs are set
if (!isset($_POST['loginSubmit'], $_POST['password'], $_POST['username'])) {
    header('location: /?f=1');
    exit();
}

// Sanitize username for compare with DB
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);

// Get the user logs
$pdo = DBSingleton::PDO();

$stm = $pdo->prepare("
            SELECT password FROM user WHERE username = :username
        ");

$stm->bindParam(':username', $username);

if (!$stm->execute()) {
    header('location: /?f=2');
    exit();
}
$encryptedPassword = $stm->fetch()['password'];

// check passwords match
if (!password_verify($_POST['password'], $encryptedPassword)) {
    header('location: /?f=3');
    exit();
}
session_start();
$_SESSION['statut'] = "user";
$_SESSION['username'] = $username;
header('location: /?f=0');