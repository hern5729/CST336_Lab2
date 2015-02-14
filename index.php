<!--
To change this template use Tools | Templates.
-->
<!DOCTYPE html>
<html>
<head>
    <title>Lab 2: Silverjack</title>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <div id="rules">
        <h2>
            Rules:
        </h2>
        <ul>
            <li>Each player gets five random cards, including face cards.</li>
            <li>Each player must have different card values (no duplicate values).</li>
            <li>Jack is 11 points, Queen 12, and King 13. Ace is always one.</li>
            <li>The player with the sum of card values closer to 42 wins.</li>
        </ul>
    </div>
    <div id="wrapper">

        <h1> Silverjack </h1>

        <?php
        $totals = array();

        include 'includes/functions.php';
        $monse = createArray();
        $addie = createArray();
        $jose = createArray();
        $brian = createArray();

        echo "<table>";
        $totals[] = displayTable("monse", $monse);
        $totals[] = displayTable("addie", $addie);
        $totals[] = displayTable("jose", $jose);
        $totals[] = displayTable("brian", $brian);
        echo "</table>";

        $winnerTotal = abs(42 - $totals[0]);
        $winnerIndex = 0;
        $tied = false;

        for($index = 1; $index < 4; $index++){
            if($winnerTotal == abs(42 - $totals[$index]))
                $tied = true;
            if(abs(42 - $totals[$index]) < $winnerTotal){
                $winnerTotal = abs(42 - $totals[$index]);
                $winnerIndex = $index;
                $tied = false;
            }
        }

        switch($winnerIndex){
            case 0: $winnerName = "Monse";
                break;
            case 1: $winnerName = "Addie";
                break;
            case 2: $winnerName = "Jose";
                break;
            case 3: $winnerName = "Brian";
                break;
        }
        if($tied)
            echo "<h2> Tied!</h2>";
        else
            echo "<h2>" . $winnerName . " Won!</h2>";
        ?>
        <form>
            <input  id="btn" type="submit" value="Play Again"/>
        </form>
        <footer>
            &copy; Created by:M. Hernandez,A. Constante,J. Diaz,B. De Anda
        </footer>

    </div>

    
</body>
</html>