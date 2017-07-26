<div class="no-top-img">
    <?php
    foreach($result as $item) {
        ?>
        <section class="un">
            <div class="container" id="Last-Media">
                <div class="col1">
                    <h3><a href="<?php echo PATH_RELATIVE.'newsitem/'.$item['id']; ?>"><?php echo $item['title'];?></a></h3>
                    <p>
                        <?php
                        $strlen = strlen($item['content']);
                        echo substr($item['content'], 0, $strlen/2.5).'...';
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