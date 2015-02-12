<!--
To change this template use Tools | Templates.
-->
<!DOCTYPE html>
<html>
<head>
    <title>Lab 2</title>
    <link href="css/styles.css" rel = "stylesheet">
</head>
<body>
    <h1> Silverjack </h1>
    <?php
        include 'includes/functions.php';
        $monse = createArray();
        $addie = createArray();
        $jose = createArray();
        $brian = createArray();
    ?>
    
    <?php
        echo "<table align = 'center'>";
            displayTable("monse", $monse);
            displayTable("addie", $addie);
            displayTable("jose", $jose);
            displayTable("brian", $brian);
        echo "</table>";
    ?>
    <h2>
        Rules:
    </h2>
    <p>
        Each player gets five random cards, including face cards.
Each player must have different card values (no duplicate values). Jack is 11 points, Queen 12, and King 13. Ace is always one.
The player with the sum of card values closer to 42 wins.
    </p>
    
</body>
</html>