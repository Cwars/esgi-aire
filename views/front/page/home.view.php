<div class="top-image">
    <!--<img src="images/header.png" width="100%" alt="header">-->
    <h1 class="slide-label"><?php echo $title;?></h1>
</div>

<section class="un" id="Dedicaces">
    <div class="container">
        <div class="col">
            <?php echo htmlspecialchars_decode($content); ?>
        </div>
    </div>
</section>
<section class="deux" id="Dedicaces">
    <div class="container">
        <?php
        function resample($jpgFile, $thumbFile, $width, $orientation) {
            // Get new dimensions
            list($width_orig, $height_orig) = getimagesize($jpgFile);
            $height = (int) (($width / $width_orig) * $height_orig);
            // Resample
            $image_p = imagecreatetruecolor($width, $height);
            $image   = imagecreatefromjpeg($jpgFile);
            imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
            // Fix Orientation
            switch($orientation) {
                case 3:
                    $image_p = imagerotate($image_p, 180, 0);
                    break;
                case 6:
                    $image_p = imagerotate($image_p, -90, 0);
                    break;
                case 8:
                    $image_p = imagerotate($image_p, 90, 0);
                    break;
            }
            // Output
            imagejpeg($image_p, $thumbFile, 90);
        }
        foreach($resultNews as $item)
        {    ?>
            <div class="deux">
                <div class="col firstcol">
                    <img src="<?php echo $item["pathChild"]; ?>" alt="" class="img-responsive">
                    <audio src="<?php echo $item["pathChild"]; ?>"></audio>
                </div>
            </div>
            <div class="col">
                <h2><?php echo $item["title"]; ?></h2>
                <?php echo htmlspecialchars_decode($item["content"]); ?>
            </div>
        <?php }
        ?>
    </div>
</section>

<section class="un" id="Event">
    <div class="container">
        <div class="deux">
            <article class="col firstcol">
                <h2 class="text-center">Evenements à venir</h2>
            </article>
            <?php
            foreach($resultEvent as $item)
            {    ?>
                <article class="col">
                    <h2><?php echo $item["title"]; ?></h2>
                    <?php echo htmlspecialchars_decode($item["description"]); ?>
                    <?php echo $item["date"]; ?>
                    <?php echo $item["author"]; ?>
                </article>
            <?php }
            ?>
        </div>
    </div>
</section>