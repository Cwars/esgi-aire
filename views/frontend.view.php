<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <title>Homepage</title>
    <meta name="Description" content="Page d'accueil" />
    <link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>assets/front/css/screen.css">
    <link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>assets/front/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>assets/PHamlP_3.2/css/style.php">
    <link rel="icon" type="image/ico" sizes="32x32" href="<?php echo PATH_RELATIVE ; ?>images/favicon.ico">

</head>
<body><!-- oncontextmenu="return false;"-->

<header>
    <div class="nav-container">
        <nav>
            <ul id="desktop">
                <li class="navlogo"><img src="<?php echo PATH_RELATIVE ; ?>assets/front/images/logo.png" id="logo" alt="logo"></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>home">Home</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>news/1">Actualité</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>presentation">Présentation</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>event/1">Evènement</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>gallery">Galerie</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>contact">Contact</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>xml">XML</a></li>
                <?php
                if(isset($_SESSION['admin']))
                {
                    if($_SESSION['admin'] == 1 || $_SESSION['admin' == 2])
                    {
                        ?>
                        <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>back/dashboard/menu">BackOffice (<?php echo $_SESSION['username']; ?>)</a></li>
                        <li class="menu"><a href="<?php echo PATH_RELATIVE; ?>logout">Déconnexion</a></li>
                        <?php
                    }else {
                        ?>
                        <li class="menu">Profil (<?php echo $_SESSION['username']; ?>)</li>
                        <li class="menu"><a href="<?php echo PATH_RELATIVE; ?>logout">Déconnexion</a></li>
                        <?php
                    }
                }else {
                    ?>
                    <li class="menu"><a href="<?php echo PATH_RELATIVE; ?>login">Connexion</a></li>
                    <li class="menu"><a href="<?php echo PATH_RELATIVE; ?>register">Inscription</a></li>
                    <?php
                }
                ?>
            </ul>
            <ul id="mobile">
                <li class="navlogo"><img src="<?php echo PATH_RELATIVE ; ?>assets/front/images/logo.png" id="logo" alt="logo"></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>home">Home</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>news/1">Actualité</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>presentation">Présentation</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>event/1">Evènement</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>gallery">Galerie</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>contact">Contact</a></li>
                <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>xml">XML</a></li>
                <?php
                if(isset($_SESSION['admin']))
                {
                    if($_SESSION['admin'] == 1)
                    {
                        ?>
                        <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>back/dashboard/menu">BackOffice (<?php echo $_SESSION['username']; ?>)</a></li>
                        <li class="menu"><a href="<?php echo PATH_RELATIVE; ?>logout">Déconnexion</a></li>
                        <?php
                    }else {
                        ?>
                        <li class="menu"><a href="<?php echo PATH_RELATIVE ; ?>user">Profil (<?php echo $_SESSION['username']; ?>)</a></li>
                        <li class="menu"><a href="<?php echo PATH_RELATIVE; ?>logout">Déconnexion</a></li>
                        <?php
                    }
                }else {
                    ?>
                    <li class="menu"><a href="<?php echo PATH_RELATIVE; ?>login">Connexion</a></li>
                    <li class="menu"><a href="<?php echo PATH_RELATIVE; ?>register">Inscription</a></li>
                    <?php
                }
                ?>
            </ul>
            <div id="pull"><span><i class="fa fa-bars" aria-hidden="true"></i></span></div>
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
<script type="text/javascript" src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js" defer></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" defer></script>
<script type="text/javascript" src="<?php echo PATH_RELATIVE ; ?>assets/front/js/script-front.js" defer></script>
</body>
</html>