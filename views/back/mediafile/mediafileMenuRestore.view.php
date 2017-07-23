    <h1>Fichiers Multimédias</h1>
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
            echo "<a class='table-button restore' href='actionRestore/" . $mediafile['id'] . "'> Restaurer </a>";
            echo "</td>";


            echo "</tr>";
        }
        ?>

    </table>