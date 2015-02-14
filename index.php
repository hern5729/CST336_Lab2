<!--
To change this template use Tools | Templates.
-->
<!DOCTYPE html>
<html>
<head>
    <title>Lab 2</title>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    
    <?php
    $array = array();

    include 'includes/functions.php';
    $monse = createArray();
    $addie = createArray();
    $jose = createArray();
    $brian = createArray();


    echo "<table>";
    $array = displayTable("monse", $monse);
    $array = displayTable("addie", $addie);
    $array = displayTable("jose", $jose);
    $array = displayTable("brian", $brian);
    echo "</table>";

    $winnerTotal = abs(42 - $array[0]);
    $winnerIndex = 0;

    for($index = 1; $index < 3; $index++){
        if(abs(42 - $array[$index]) < $winnerTotal){
            $winnerTotal = abs(42 - $array[$index]);
            $winnerIndex = $index;
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

    echo "<h1>" . $winnerName . " Won!</h1>";
    ?>
    
    
</body>
</html>