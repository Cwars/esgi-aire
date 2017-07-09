<div class="content-wrapper">
    <h1>Ajouter un utilisateur</h1>

<?php
$this->includeModal("form", $formRegister);
?>
    <div class="info-error">
<?php
if( isset($_SESSION["form_error"]) ){
    foreach ($_SESSION["form_error"] as $error) {
        echo $msgError[$error];
        echo "<br>";
    }
}?>
</div>
</div>
<!-- .content-wrapper -->
<script>
    var session1²Error = <?php echo $_SESSION['error']; ?>;
    alert sessionError;
</script>