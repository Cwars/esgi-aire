<div class="content-wrapper">
    <h1>Modifier votre site</h1>

    <style>
        @import url("https://fonts.googleapis.com/css?family=EB+Garamond|Jaldi|Lustria|Open+Sans:400,700");
    </style>
    <p class="info-form">
        Vous pouvez modifier la couleur de votre thème ainsi que la couleur de la police.<br>
        Attention tout de même à la visibilité de votre site.<br>
        Une liste de polices est également disponible, et des prévisualisation également.<br>
        Vous pouvez utiliser cet outil pour trouver la couleur hexadécimale qui vous convient : <a href="http://htmlcolorcodes.com/color-picker/" target="_blank">Color Picker</a>
    </p>
    <?php
    $this->includeModal("formstyle", $formStyle);
    ?>

    <div style="padding-top: 15px">
        <p>Jaldi : </p><span style="font-family: 'Jaldi', sans-serif">Portez ce vieux whisky au juge blond qui fume.</span>
    </div>
    <div style="padding:5px 0;">
    <p>EB Garamond : </p><span style="font-family: 'EB Garamond', sans-serif">Portez ce vieux whisky au juge blond qui fume.</span>
    </div>
    <div>
    <p>Lustria : </p><span style="font-family: 'Lustria', sans-serif">Portez ce vieux whisky au juge blond qui fume.</span>
    </div>
    <div style="padding: 5px 0;">
        <p>Open Sans : </p><span style="font-family: 'Open Sans', sans-serif!important;">Portez ce vieux whisky au juge blond qui fume.</span>
    </div>
</div>
