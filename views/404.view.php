<?php
$url = "http://".$_SERVER['HTTP_HOST'].PATH_RELATIVE;
?>
<link rel="stylesheet" href="<?php echo $url ?>assets/back/css/style.css">

</div>

        <?php
            include $this->view.".view.php";
         ?>

</div>