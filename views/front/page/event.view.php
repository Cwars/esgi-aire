
<!--
array (size=5)
  'title' => string 'aaasazefz' (length=9)
  'description' => string '&lt;p&gt;fzrhtefg&lt;/p&gt;' (length=27)
  'date' => string '2017-07-14' (length=10)
  'dateInserted' => string '2017-07-26 04:36:22' (length=19)
  'author' => string 'admin' (length=5)
-->
<div class="no-top-img">
    <?php
    foreach($result as $item) {
        ?>
        <section class="un">
            <div class="container" id="Last-Media">
                <div class="col1">
                    <h2><?php echo $item['title'];?></h2>
                    <h3>Dat de l'événement : <?php echo $item['date']; ?></h3>

                    <p>
                        <?php

                        echo $item['description'];
                        ?>
                    </p>
                    <div class="metadatas">
                        <p>Rédigé par : <?php echo $item['author'];?>, le <?php echo $item['dateInserted'];?></p>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    ?>
    <div class="pagination">
        <span>
            <button id="prevPage">Previous</button>
            <form id="pagination">
                <select id="pagePagination" name="page">
                    <?php
                    for ($i = 1; $i <= $nbPage ; $i++){
                        ?>
                        <option value= <?php echo $i ?> ><?php echo $i ?></option>
                        <?php
                    }
                    ?>
                </select>
            </form>
            <button id="goPage">Go</button>
            <button id="nextPage">Next</button>
        </span>
    </div>
</div>