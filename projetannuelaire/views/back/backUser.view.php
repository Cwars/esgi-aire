
<div class="content-wrapper">
    <h1>Utilisateur</h1>
    <table>

        <?php
        $datausers = new User();

        $search = ["id","username","firstname","lastname","email","status","dateInserted"];

        echo "<thead><tr>";
        foreach ($search as $key){
            echo "<th>";
            echo $key;
            echo "</th>";
        }
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
            echo "<a href='backActionUserUpdate/" . $user['id'] . "'> Update </a>";
            echo "</td>";
            echo "<td>";
            echo "<a href='backActionUserDelete/" . $user['id'] . "'> Delete </a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </table>
</div> <!-- .content-wrapper -->