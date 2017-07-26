<div class="top-image">
    <!--<img src="images/header.png" width="100%" alt="header">-->
    <h1 class="slide-label">Inscription</h1>
</div>

<section class="un" id="Register">
    <div class="container">

        <div class="col1">
            <h2 class="text-center">Formulaire d'inscription</h2>
            <?php
            $this->includeModal("form", $formRegister);

            if(isset($_SESSION['form_error']))
            {
                ?>
            <div class="info-error">
                <?php
                foreach ($_SESSION['form_error'] as $e) {
                    echo '<p>';
                    echo $msgError[$e];
                    echo '</p>';
                }
                unset($_SESSION['form_error']);
                unset($_SESSION['form_post']);
                ?>
            </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>
