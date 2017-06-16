
<div class="content-wrapper">
    <h1>Utilisateur</h1>
    <div>
        <a href="<?php $_SERVER["HTTP_HOST"] ?>/projetannuelaire/back/backUseradd" class="button-add">Ajouter</a>
    </div>
    <table class="table">

        <?php
        $datausers = new User();

        $search = ["id","username","firstname","lastname","email","status","dateInserted"];

        echo "<thead><tr>";
        foreach ($search as $key){
            echo "<th>";
            echo $key;
            echo "</th>";
        }
        echo "<th colspan='2'>Actions</th>";
        echo "</tr></thead>";


        foreach($datausers->getObj($search) as $user)
        {
            echo "<tr>";

            foreach ($user as $u)
            {
                echo "<td>";
                echo $u;
                echo "</td>";
            }
            echo "<td>";
            echo "<a class='table-button' href='backUserUpdate/" . $user['id'] . "'> Update </a>";
            echo "</td>";
            echo "<td>";
            echo "<a class='table-button' href='backActionUserDelete/" . $user['id'] . "'> Delete </a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </table>
</div> <!-- .content-wrapper -->