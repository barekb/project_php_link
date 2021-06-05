<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Sport-view</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="mainNavbar">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Accueil</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="hardwareDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Articles</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="#" id="composantsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Partager
                                </a>
                            </li>
                            <li class="nav-item pl-4">

                                <?php
                                if (isset($_SESSION['user'])) {
                                ?>
                                    <p>You are log with <?= $_SESSION['user']->nickname ?></p>
                                    <a href="/logout">
                                        <button type="submit" class="btn btn-info rounded-0" role="button">
                                            Logout
                                        </button>
                                    </a>
                                    <a href=" /new" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" id="add-btn">J'ajoute un Article</a>
                                    <!-- <a href="?action=logout" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" id="logout-btn">Deconnexion</a> -->
                                <?php
                                } else {
                                ?>
                                    <a href="/login">
                                        <button type="submit" class="btn btn-info rounded-0" role="button">
                                            Login
                                        </button>
                                    </a>
                                    <!-- <a href="?action=login" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" id="login-btn" style="margin-left: 34px;margin-right: 34px;">Connexion</a> -->

                                <?php
                                }
                                ?>
                            </li>
                            <li class="nav-item pl-4">
                                <form class="d-flex" action="/">
                                    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success ml-2" type="submit">Search</button>
                                </form>

                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>