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

<?php
if($resultNews) {
    ?>
    <section class="<?php if(isset($path)){ echo "deux";}else{echo "un";} ?>" id="Last-Media">
        <div class="container">
            <?php

            foreach ($resultNews as $item) { ?>

                <?php
                if(isset($path))
                {
                    ?>
                    <div class="deux">
                        <div class="col firstcol img-col">
                            <?php
                            if($item["typeChild"] == "image")
                            {
                                ?>
                                <img src="..<?php echo $item["pathChild"]; ?>" alt="" class="img-item">
                                <?php
                            }
                            elseif($item["typeChild"] == "musique")
                            {
                                ?>
                                <video controls="controls" name="media">
                                    <source src="..<?php echo $path; ?>">
                                </video>
                                <?php
                            }
                            if($item["typeChild"] == "video")
                            {
                                ?>
                                <video controls="controls" name="media">
                                    <source src="..<?php echo $path; ?>">
                                </video>
                                <?php
                            }
                            ?>
                        </div>
                    <?php
                }
                ?>
                <div class="col">
                    <h2><?php echo $item["title"]; ?></h2>
                    <?php echo htmlspecialchars_decode($item["content"]); ?>
                </div>
                <?php

                if(isset($path)) {
                    ?>
                    </div>
                    <?php
                }
             }
            ?>
        </div>
    </section>
    <?php
}
if($resultEvent) {
    ?>
    <section class="un" id="Event">
        <div class="container">
            <div class="deux">
                <article class="col firstcol">
                    <h2 class="text-center">Evenements à venir</h2>
                </article>
                <?php
                foreach ($resultEvent as $item) { ?>
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
    <?php
}
