<div class="top-image">
    <!--<img src="images/header.png" width="100%" alt="header">-->
    <h1 class="slide-label"><?php echo $title; ?></h1>
</div>

<section class="un" id="Event">
    <div class="container">
        <h2 class="text-center">Formulaire de contact</h2>
        <div class="col1 firstcol">
            <p class="text-center">
                <?php echo htmlspecialchars_decode($content); ?>

            <?php $this->includeModal("form", $formContact); ?>

        </div>

    </div>
</section>