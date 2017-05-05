<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <meta name="Description" content="Page d'accueil" />
    <link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>/assets/css/screen.css">
    <link href="https://fonts.googleapis.com/css?family=Jaldi" rel="stylesheet"></head>
<body>

<header>
    <div class="content">
        <nav>
            <ul>
                <li><img src="<?php echo PATH_RELATIVE ; ?>/images/logo.png" id="logo" alt="logo"></li>
                <li><a href="">Home</a></li>
                <li><a href="">Actualité</a></li>
                <li><a href="">Présentation</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Planning</a></li>
                <li><a href="">Evènement</a></li>
                <li><a href="">Galerie</a></li>
            </ul>
        </nav>
    </div>
    <div>       
        <img src="<?php echo PATH_RELATIVE ; ?>/images/header.png" width="100%" alt="header">
    </div>
</header>

        <?php
            // include "views/".$this->view.".view.php";
            include $this->view.".view.php";
         ?>

<footer>
    <h2>Contact</h2>

    <div class="content">
        <p>Groupe IW1 <br>
            ESGI-AIRE <br><br>
            242 Rue du Faubourg Saint-Antoine <br>
            75012 Paris <br>

            Tel: 06 35 13 87 44 <br>
            Mail: esgi-aire@gmail.com
        </p>
    </div>
</footer>
</body>
</html>