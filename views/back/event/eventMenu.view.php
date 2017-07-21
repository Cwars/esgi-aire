<h1>Event</h1>
<div>
    <a href="<?php echo PATH_RELATIVE ; ?>back/event/add" class="button-add">Ajouter</a>
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


    foreach($result as $event)
    {
        echo "<tr>";

        foreach ($event as $eventinfo)
        {
            echo "<td>";
            echo $eventinfo;
            echo "</td>";
        }
        echo "<td>";
        echo "<a class='table-button' href='Update/" . $event['id'] . "'> Update </a>";
        echo "</td>";
        echo "<td>";
        echo "<a class='table-button delete' href='ActionDelete/" . $event['id'] . "'> Delete </a>";
        echo "</td>";

        echo "</tr>";
    }
    ?>

</table>