<?php
if(isset($_SESSION['admin']) && $_SESSION['admin'] == '0' || !isset($_SESSION['admin']))
{
    $_SESSION['error'] = 14;
    header("Location: ".PATH_RELATIVE."back/user/Connection");
}
/*if($this->view == "back/user/logout")
{
    session_destroy();
    session_unset();
    header("Location: ".PATH_RELATIVE."back/user/Connection");
}*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>assets/back/css/reset.css">
    <link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>assets/back/css/menus.css">
    <link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>assets/back/css/style.css">
    <link rel="icon" type="image/ico" sizes="32x32" href="<?php echo PATH_RELATIVE ; ?>images/favicon.ico">
    <link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>assets/back/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Back office</title>
</head>
<body>

<header class="nav-header"> <!--cd-main-header-->
    <a href="<?php echo PATH_RELATIVE ; ?>home" class="logo"><img src="<?php echo PATH_RELATIVE ; ?>assets/back/img/logo.png" alt="Logo"></a>
    <!--<a href="#" class="nav-header-trigger">Menu<span></span></a>-->
    <nav class="nav-header-link">
        <ul class="nav-header-link-list">

            <li><a href="<?php echo PATH_RELATIVE; ?>back/user/Setting"><i class="fa fa-user-circle" aria-hidden="true"></i></i></a></li>
            <li><a href="<?php echo PATH_RELATIVE; ?>back/user/Setting"><i class="fa fa-wrench" aria-hidden="true"></i></a></li>
            <li><a href="#" OnClick="javascript:window.location.reload()" ><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
            <li><a href="<?php echo PATH_RELATIVE; ?>back/user/logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
        </ul>
    </nav>
</header>

<main class="main-content">
    <nav class="side-nav">
        <ul>
            <li class="label">Menu</li>
            <li class="menu-icon">
                <a href="<?php echo PATH_RELATIVE ; ?>back/dashboard/menu"><i class="fa fa-tachometer" aria-hidden="true"></i></a>
                <span class="page">Dashboard</span>
            </li>
            <li class="menu-icon">
                <a href="<?php echo PATH_RELATIVE ; ?>back/page/menu/1"><i class="fa fa-clone" aria-hidden="true"></i></a>
                <span class="page">Pages</span>
            </li>
            <li class="menu-icon">
                <a href="<?php echo PATH_RELATIVE ; ?>back/news/menu/1"><i class="fa fa-newspaper-o" aria-hidden="true"></i></a>
                <span class="page">Articles</span>
            </li>
            <li class="menu-icon">
                <a href="<?php echo PATH_RELATIVE ; ?>back/user/menu/1"><i class="fa fa-user" aria-hidden="true"></i>
                </a>
                <span class="page">Utilisateurs</span>
            </li>
            <li class="menu-icon">
                <a href="<?php echo PATH_RELATIVE ; ?>back/event/menu/1"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                <span class="page">Evénements</span>
            </li>
            <li class="menu-icon">
                <a href="<?php echo PATH_RELATIVE ; ?>back/mediafile/menu/1"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                <span class="page">Fichiers multimédias</span>
            </li>
        </ul>
    </nav>

    <div class="content-wrapper">
        <?php
        // include "views/".$this->view.".view.php";
        include $this->view.".view.php";
        ?>
    </div>
</main> <!-- .cd-main-content -->
<script type="text/javascript" src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js" defer></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" defer></script>
<script type="text/javascript" src="<?php echo PATH_RELATIVE ; ?>assets/back/js/script-back.js" defer></script>
<script type="text/javascript" src="<?php echo PATH_RELATIVE ; ?>assets/Chart.js/Chart.min.js" defer></script>
<script type="text/javascript" src="<?php echo PATH_RELATIVE ; ?>assets/Chart.js/app.js" defer></script>
</body>
</html>