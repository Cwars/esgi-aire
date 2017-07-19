<div class="content-wrapper">
    <h1>Pages</h1>
    <div>
        <a href="<?php echo PATH_RELATIVE ; ?>back/user/add" class="button-add">Ajouter</a>
    </div>
    <table class="table">

        <?php
        $datausers = new User();

        $search = ["id","dateInserted"];

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
            echo "<a class='table-button' href='Update/" . $user['id'] . "'> Update </a>";
            echo "</td>";
            echo "<td>";
            echo "<a class='table-button' OnClick=\"return confirm('Êtes-vous sûr ?');\" href='ActionDelete/" . $user['id'] . "'> Delete </a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </table>
</div> <!-- .content-wrapper -->