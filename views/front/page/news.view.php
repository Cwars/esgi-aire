<section class="deux" id="Articles">
    <div class="container">
        <div class="col firstcol">
            <img src="<?php echo $path; ?>" alt="" class="img-responsive">
        </div>

        <div class="col">
            <h2><?php echo $title; ?></h2>
            <p><?php echo $content; ?></p>
        </div>
        <div class="metadatas">
            <p>Rédigé par : <?php echo $author; ?>, le <?php echo $dateInserted; ?></p>
        </div>
    </div>

</section>

<section class="un" id="Acomments">
    <div class="container">
        <div id="comments">
            <h3>Commentaires</h3>
            <div class="comment">
                <p class="author">Jean Babouche<em>, le {date}</em></p>
                <p class="com-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, asperiores autem deserunt, dolor et facere inventore laudantium.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, asperiores autem deserunt, dolor et facere inventore laudantium</p>
            </div>

            <div class="comment">
                <p class="author">Jean Babouche</p>
                <p class="com-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, asperiores autem deserunt, dolor et facere inventore laudantium.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, asperiores autem deserunt, dolor et facere inventore laudantium</p>
            </div>
        </div>


        <div id="addcomments">
            <h3>Ajouter un commentaire</h3>
            <?php
            $this->includeModal("form", $formCom);
            ?>
        </div>
    </div>
</section>