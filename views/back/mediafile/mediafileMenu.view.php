    <h1>Fichiers Multimédias</h1>
    <div>
        <a href="http://<?php echo $_SERVER["HTTP_HOST"] ?><?php echo PATH_RELATIVE ; ?>back/mediafile/add" class="button-add">Ajouter</a>
    </div>
    <table class="table">

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
            echo "<a class='table-button' href='ActionDelete/" . $mediafile['id'] . "'> Delete </a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </table>