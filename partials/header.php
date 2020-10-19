<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="recursos/imagenes/ball.ico">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Pokedex</title>
</head>
<body class="bg-light">
<nav class=" navbar navbar-dark bg-danger">
    <a class="navbar-brand" href="http://localhost/pokedex-saladino-juanpablo/index.php">
        <img src="recursos/imagenes/ball.png" width="30" height="30" alt="" loading="lazy">
    </a>
    <a class="navbar-brand text-center text-dark"
       href="http://localhost/pokedex-saladino-juanpablo/index.php">Pokedex</a>
    <?php
    session_start();

    if (isset($_SESSION["logueado"])) {
        if ($_SESSION["logueado"] == 1) {
            include_once "partials/botonLogout.php";
        } else {
            include_once "partials/formularioLogin.php";
        }
    } else {
        include_once "partials/formularioLogin.php";
    }
    ?>
</nav>