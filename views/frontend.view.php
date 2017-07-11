<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <meta name="Description" content="Page d'accueil" />
    <link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>/assets/front/css/screen.css">
    <link href="https://fonts.googleapis.com/css?family=Jaldi" rel="stylesheet"></head>
	<link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>/assets/front/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<body>

<header>
    <div class="nav-container">
        <nav>
            <ul>
                <li><img src="<?php echo PATH_RELATIVE ; ?>/assets/front/images/logo.png" id="logo" alt="logo"></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>home">Home</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>news">Actualité</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>presentation">Présentation</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>planning">Planning</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>event">Evènement</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>gallery">Galerie</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>contact">Contact</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>contact">Connexion</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>contact">Inscription</a></li>
            </ul>
        </nav>
    </div>
</header>

        <?php
            // include "views/".$this->view.".view.php";
            include $this->view.".view.php";
         ?>
         
<footer>
    <h2 class="text-center">Contact</h2>

    <div class="content">
        <p class="text-center">Groupe IW1 <br>
            ESGI-AIRE <br><br>
            242 Rue du Faubourg Saint-Antoine <br>
            75012 Paris <br>

            Tel: 06 35 13 87 44 <br>
            Mail: esgi-aire@gmail.com
        </p>
    </div>
</footer>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo PATH_RELATIVE ; ?>/assets/ckeditor/ckeditor.js"></script>
</body>
</html>