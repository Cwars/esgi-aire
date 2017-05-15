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
    <a href="#" class="logo"><img src="<?php echo PATH_RELATIVE ; ?>/assets/back/img/logo.png" alt="Logo"></a>


    <!--<a href="#" class="nav-header-trigger">Menu<span></span></a>-->

    <nav class="nav-header-link">
        <ul class="nav-header-link-list">
            <li><a href="#"><i class="fa fa-wrench" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
        </ul>
    </nav>
</header>

        <?php
            // include "views/".$this->view.".view.php";
            include $this->view.".view.php";
         ?>

</body>
</html>