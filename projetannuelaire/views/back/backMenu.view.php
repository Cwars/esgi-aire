<main class="main-content">
    <nav class="side-nav">
        <ul>
            <li class="label">Menu</li>

            <li class="menu-icon">
                <a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i></a>
                <span class="page">Dashboard</span>
            </li>

            <li class="menu-icon">
                <a href="#"><i class="fa fa-clone" aria-hidden="true"></i></a>
                <span class="page">Pages</span>
            </li>

            <li class="menu-icon">
                <a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i></a>
                <span class="page">Articles</span>
            </li>

            <li class="menu-icon">
                <a href="#"><i class="fa fa-user" aria-hidden="true"></i>
                </a>
                <span class="page">Utilisateurs</span>
            </li>

            <li class="menu-icon">
                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                <span class="page">Evénements</span>
            </li>

            <li class="menu-icon">
                <a href="#"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                <span class="page">Fichiers multimédias</span>
            </li>

        </ul>


    </nav>

    <div class="content-wrapper">
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

            echo "</tr>";
        }
        ?>

        </table>
    </div> <!-- .content-wrapper -->