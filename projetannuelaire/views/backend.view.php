<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>/assets/back/scss/reset.css">
    <link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>/assets/back/scss/menus.css">
    <link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>/assets/back/scss/style.css">
    <link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>/assets/back/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <title>Back office</title>
</head>
<body>

<header class="nav-header"> <!--cd-main-header-->
    <a href="<?php $_SERVER["HTTP_HOST"] ?>/projetannuelaire/back/backmenu" class="logo"><img src="<?php echo PATH_RELATIVE ; ?>/assets/back/img/logo.png" alt="Logo"></a>


    <!--<a href="#" class="nav-header-trigger">Menu<span></span></a>-->

    <nav class="nav-header-link">
        <ul class="nav-header-link-list">
            <li><a href="#"><i class="fa fa-wrench" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
        </ul>
    </nav>
</header>

<main class="main-content">
    <nav class="side-nav">
        <ul>
            <li class="label">Menu</li>

            <li class="menu-icon">
                <a href="<?php $_SERVER["HTTP_HOST"] ?>/projetannuelaire/back/backmenu"><i class="fa fa-tachometer" aria-hidden="true"></i></a>
                <span class="page">Dashboard</span>
            </li>

            <li class="menu-icon">
                <a href="<?php $_SERVER["HTTP_HOST"] ?>/projetannuelaire/back/backpage"><i class="fa fa-clone" aria-hidden="true"></i></a>
                <span class="page">Pages</span>
            </li>

            <li class="menu-icon">
                <a href="<?php $_SERVER["HTTP_HOST"] ?>/projetannuelaire/back/backnews"><i class="fa fa-newspaper-o" aria-hidden="true"></i></a>
                <span class="page">Articles</span>
            </li>

            <li class="menu-icon">
                <a href="<?php $_SERVER["HTTP_HOST"] ?>/projetannuelaire/back/backuser"><i class="fa fa-user" aria-hidden="true"></i>
                </a>
                <span class="page">Utilisateurs</span>
            </li>

            <li class="menu-icon">
                <a href="<?php $_SERVER["HTTP_HOST"] ?>/projetannuelaire/back/backevent"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                <span class="page">Evénements</span>
            </li>

            <li class="menu-icon">
                <a href="<?php $_SERVER["HTTP_HOST"] ?>/projetannuelaire/back/backmediafile"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                <span class="page">Fichiers multimédias</span>
            </li>

        </ul>


    </nav>
        <?php
            // include "views/".$this->view.".view.php";
            include $this->view.".view.php";
         ?>

</main> <!-- .cd-main-content -->

</body>
</html>