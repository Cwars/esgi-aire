<h1>Articles</h1>
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


    foreach($result as $news)
    {
        echo "<tr>";

        foreach ($news as $u)
        {
            echo "<td>";
            echo $u;
            echo "</td>";
        }
        echo "<td>";
        echo "<a class='table-button restore' href='ActionRestore/" . $news['id'] . "'> Restore </a>";
        echo "</td>";

        echo "</tr>";
    }
    ?>

</table>