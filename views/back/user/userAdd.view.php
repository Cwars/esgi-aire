<div class="content-wrapper">
    <h1>Ajouter un utilisateur</h1>

<?php
$this->includeModal("form", $formRegister);

if( isset($_SESSION["form_error"]) ){
?>
    <div class="info-error">
<?php
    foreach ($_SESSION["form_error"] as $error) {
        echo $msgError[$error];
        echo "<br>";
    }
?>
    </div>
<?php
}?>
    <pre>
        <?php
        var_dump($_SESSION);
        ?>
    </pre>

</div>
<!-- .content-wrapper -->
<script>
    var sessionError = [<?php $i = 1; foreach ($_SESSION['form_post'] as $error) { echo "'".$error."'"; if ($i < sizeof($_SESSION['form_post'])) { echo ","; $i++; } } ?>];

    document.getElementsByName("username")[0].value = sessionError[0];
    document.getElementsByName("firstname")[0].value = sessionError[1];
    document.getElementsByName("lastname")[0].value = sessionError[2];
    document.getElementsByName("email")[0].value = sessionError[3];
</script>

<?php
unset($_SESSION['form_error']);
unset($_SESSION['form_post']);