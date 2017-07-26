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
                            <source src="../<?php echo $path; ?>">
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

    <section class="un" id="Acomments">
        <div class="container">

            <div class="un" id="comments">
                <div class="col1">
                    <h3>Commentaires</h3>
                    <div class="comment">
                        <p class="author">Jean Babouche<em>, le {date}</em></p>
                        <p class="com-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, asperiores autem deserunt, dolor et facere inventore laudantium.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, asperiores autem deserunt, dolor et facere inventore laudantium</p>
                    </div>

                    <div class="comment">
                        <p class="author">Jean Babouche</p>
                        <p class="com-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, asperiores autem deserunt, dolor et facere inventore laudantium.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, asperiores autem deserunt, dolor et facere inventore laudantium</p>
                    </div>
                    <div id="addcomments">
                        <h3>Ajouter un commentaire</h3>
                        <?php
                        $this->includeModal("form", $formCom);
                        ?>
                    </div>
                </div>
            </div>

        </div>

    </section>
</div>