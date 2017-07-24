    <h1><?php echo ucfirst($type); ?></h1>
    <div>
        <a href="<?php echo PATH_RELATIVE ; ?>back/<?php echo $type; ?>/add" class="button-add">Ajouter</a>
    </div>
    <div>
        <a href="<?php echo PATH_RELATIVE ; ?>back/<?php echo $type; ?>/menuRestore" class="button-add">Restaurer</a>
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


        foreach($result as $item)
        {
            echo "<tr>";

            foreach ($item as $u)
            {
                echo "<td>";
                echo $u;
                echo "</td>";
            }
            echo "<td>";
            echo "<a class='table-button' href='Update/" . $item['id'] . "'> Update </a>";
            echo "</td>";
            echo "<td>";
            echo "<a class='table-button delete' href='ActionDelete/" . $item['id'] . "'> Delete </a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </table>

    <script>


    </script>
    <table>
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
    </table>
