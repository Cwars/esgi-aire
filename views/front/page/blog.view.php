<section>
    <?php
    foreach($result as $item)
    {
        echo "<tr>";

        foreach ($item as $u)
        {
            echo "<td>";
            echo $u;
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>

</section>

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