<div class="top-image">
    <!--<img src="images/header.png" width="100%" alt="header">-->
    <h1 class="slide-label">Inscription</h1>
</div>

<section class="un" id="Event">
    <div class="container">
        <h2 class="text-center">Formulaire d'inscription</h2>
        <div class="col1 firstcol">

            <?php
            $this->includeModal("form", $formRegister)

            if(isset($_SESSION['form_error']))
            {
                ?>
            <div class="info-error">
                <?php
                foreach ($_SESSION['form_error'] as $e) {
                    echo $msgError[$e];
                    echo $msgError[$e];
                }
                ?>
            </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>