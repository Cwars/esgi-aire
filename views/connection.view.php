<?php
if(isset($_SESSION['admin']) && $_SESSION['admin'] != 0)
{
    header("Location: ".PATH_RELATIVE."back/dashboard/menu");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>assets/back/css/login.css">
    <link rel="stylesheet" href="<?php echo PATH_RELATIVE ; ?>assets/back/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/ico" sizes="32x32" href="<?php echo PATH_RELATIVE ; ?>images/favicon.ico">


    <title>Connexion</title>
</head>
<body>

<?php
// include "views/".$this->view.".view.php";
include $this->view.".view.php";
?>
<script type="text/javascript" src="<?php echo PATH_RELATIVE ; ?>assets/ckeditor/ckeditor.js"></script>
</body>
</html>