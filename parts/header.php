<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Randonnées, ajout</title>
    <link rel="stylesheet" href="assets/css/basics.css">
</head>
<body>
<header>
    <?php
    session_start();
    if (isset($_SESSION['statut'], $_SESSION['username'])){
    ?>
    <a href="/create.php">Create</a>
        <?php
    }
    ?>
    <a href="/index.php">List</a>
    <?php
    if (!isset($_SESSION['statut'], $_SESSION['username'])){
    ?>
    <a href="/login.php">Login</a>
        <?php
    }
    if (isset($_SESSION['statut'], $_SESSION['username'])){
        ?>
        <a href="/logout.php">Deconnexion</a>
        <?php
    }
    ?>
</header>