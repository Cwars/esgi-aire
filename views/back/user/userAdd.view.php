<div class="content-wrapper">
    <h1>Ajouter un utilisateur</h1>

<?php
$this->includeModal("form", $formRegister);

if( isset($_SESSION["form_error"])){
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
}
if (isset($_SESSION['added']) && $_SESSION['added'] == 1)
{
?>
    <div class="info-error">
        <?php
        echo $msgSuccess["added"];
        ?>
    </div>
<?php
}
?>
    <pre>
        <?php
        var_dump($_SESSION);
        ?>
    </pre>

    <pre>
        <?php
        var_dump($_SESSION['form_error']);
        ?>
    </pre>

</div>
<!-- .content-wrapper -->
<script>
    var sessionData = [<?php $i = 1; foreach ($_SESSION['form_post'] as $data) { echo "'".$data."'"; if ($i < sizeof($_SESSION['form_post'])) { echo ","; $i++; } } ?>];

    document.getElementsByName("username")[0].value = sessionData[0];
    document.getElementsByName("firstname")[0].value = sessionData[1];
    document.getElementsByName("lastname")[0].value = sessionData[2];
    document.getElementsByName("email")[0].value = sessionData[3];
</script>

<?php
unset($_SESSION['added']);
unset($_SESSION['form_error']);
unset($_SESSION['form_post']);