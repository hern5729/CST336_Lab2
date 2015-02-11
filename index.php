<!--
To change this template use Tools | Templates.
-->
<!DOCTYPE html>
<html>
<head>
    <title>Lab 2</title>
</head>
<body>
    
    <?php
        include 'includes/functions.php';
        $monse = createArray();
        $adilene = createArray();
        $jose = createArray();
        $brian = createArray();
    
        echo "<table>";
            displayTable($monse);
            displayTable($adilene);
            displayTable($jose);
            displayTable($brian);
        echo "</table>";
    ?>
    
</body>
</html>