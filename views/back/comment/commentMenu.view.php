    <h1>Commentaire</h1>
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
            echo "<a class='table-button delete' href='ActionDelete/" . $user['id'] . "'> Delete </a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </table>