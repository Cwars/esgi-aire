<div class="no-top-img">
    <section class="<?php if(isset($path)){ echo "deux";}else{echo "un";} ?>" id="News">
        <div class="container">

            <?php

            if(isset($path))
            {
            ?>

            <div class="deux">
                <div class="col firstcol img-col">
                    <?php
                    if($type == "image")
                    {
                        ?>
                        <img src="..<?php echo $path; ?>" alt="" class="img-item">
                        <?php
                    }
                    elseif($type == "musique")
                    {
                        ?>
                        <video controls="controls" name="media">
                            <source src="..<?php echo $path; ?>">
                        </video>
                        <?php
                    }
                    if($type == "video")
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
            <div class="<?php if(isset($path)){ echo "col";}else{echo "col1";} ?>">
                <h2><?php echo $title; ?></h2>
                <p><?php echo $content; ?></p>

                <div class="metadatas">
                    <p>Rédigé par : <?php echo $author; ?>, le <?php echo $dateInserted; ?></p>
                </div>
            </div>
            <?php

            if(isset($path)) {
                ?>
            </div>
                <?php
            }
            ?>

        </div>
    </section>
</div>