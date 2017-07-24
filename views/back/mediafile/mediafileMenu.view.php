    <h1>Fichiers Multimédias</h1>
    <div>
        <a href="<?php echo PATH_RELATIVE ; ?>back/mediafile/add" class="button-add">Ajouter</a>
    </div>
    <div>
        <a href="<?php echo PATH_RELATIVE ; ?>back/mediafile/menuRestore" class="button-add">Restaurer</a>
    </div>
    <table class="table">
        <div id="loader"></div>
        <?php

        echo "<thead><tr>";
        foreach ($search as $key){
            echo "<th>";
            echo $key;
            echo "</th>";
        }
        echo "<th colspan='2'>Actions</th>";
        echo "</tr></thead>";


        foreach($result as $mediafile)
        {
            echo "<tr>";

            foreach ($mediafile as $fileinfo)
            {
                echo "<td>";
                echo $fileinfo;
                echo "</td>";
            }
            echo "<td>";
            echo "<a class='table-button' href='Update/" . $mediafile['id'] . "'> Update </a>";
            echo "</td>";
            echo "<td>";
            echo "<a class='table-button delete' href='ActionDelete/" . $mediafile['id'] . "'> Delete </a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </table>