    <h1><?php echo ucfirst($type); ?></h1>
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


        foreach($result as $user)
        {
            echo "<tr>";

            foreach ($user as $u)
            {
                echo "<td>";
                echo $u;
                echo "</td>";
            }
            echo "<td>";
            echo "<a class='table-button restore' href='../ActionRestore/" . $user['id'] . "'> Restaurer </a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </table>
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