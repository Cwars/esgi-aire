    <h1>Utilisateur</h1>
    <div>
        <a href="http://<?php echo $_SERVER["HTTP_HOST"] ?><?php echo PATH_RELATIVE ; ?>back/user/add" class="button-add">Ajouter</a>
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
            echo "<a class='table-button' href='Update/" . $user['id'] . "'> Update </a>";
            echo "</td>";
            echo "<td>";
            echo "<a class='table-button' href='ActionDelete/" . $user['id'] . "'> Delete </a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </table>