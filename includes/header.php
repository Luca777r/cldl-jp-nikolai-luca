<?php
session_start();

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require_once "classes/$class.php";
});

require_once 'functions/displayComputers.php';
require_once 'functions/CRUD.php';
include 'includes/variables/variables.php';
include 'includes/functions/functions.php';
include 'variables/bd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="?page=home">LCDL gestion les ordinateurs</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="?page=selectTypeComponent">Ajouter
                        component</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="?page=form">Ajouter
                        ordinateur</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="?page=listComponents">Liste components</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="?page=designer">Liste ordinateurs</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php
                    if (isset($_SESSION['username'])) {
                        ?>
                        <a class="nav-link" href="?page=logout">
                            <?= $_SESSION['username']; ?> (Déconnexion)
                        </a>
                        <?php
                    } else {
                        ?>
                        <a class="nav-link bi bi-person" aria-current="page" href="?page=login">Connexion</a>
                        <?php
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4 d-flex justify-content-center">
