<div class="content-wrapper">
    <h1>Ajouter un article</h1>

<?php
$this->includeModal("form", $formNews);
if( isset($_SESSION["form_error"]) ){
    foreach ($_SESSION["form_error"] as $error) {
        echo "<li>".$msgError[$error];
    }
}
unset($_SESSION["form_post"]);
unset($_SESSION["form_error"]);

?>

</div>
<!-- .content-wrapper -->
