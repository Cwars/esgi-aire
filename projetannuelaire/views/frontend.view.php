<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <meta name="Description" content="Page d'accueil" />
    <link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>/assets/front/css/screen.css">
    <link href="https://fonts.googleapis.com/css?family=Jaldi" rel="stylesheet"></head>
<body>

<header>
    <div class="nav-container">
        <nav>
            <ul>
                <li><img src="<?php echo PATH_RELATIVE ; ?>/assets/front/images/logo.png" id="logo" alt="logo"></li>
                <li class="menu"><a href="">Home</a></li>
                <li class="menu"><a href="">Actualité</a></li>
                <li class="menu"><a href="">Présentation</a></li>
                <li class="menu"><a href="">Contact</a></li>
                <li class="menu"><a href="">Planning</a></li>
                <li class="menu"><a href="">Evènement</a></li>
                <li class="menu"><a href="">Galerie</a></li>
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

</body>
</html>