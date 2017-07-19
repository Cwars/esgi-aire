<h1>Articles</h1>
<div>
    <a href="<?php echo PATH_RELATIVE ; ?>back/news/add" class="button-add">Ajouter</a>
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
        echo "<a class='table-button' href='Update/" . $news['id'] . "'> Update </a>";
        echo "</td>";
        echo "<td>";
        echo "<a class='table-button delete' href='ActionDelete/" . $news['id'] . "'> Delete </a>";
        echo "</td>";

        echo "</tr>";
    }
    ?>

</table>