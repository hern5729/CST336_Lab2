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
        $addie = createArray();
        $jose = createArray();
        $brian = createArray();
    ?>
    
    <?php
        echo "<table>";
            displayTable("monse", $monse);
            displayTable("addie", $addie);
            displayTable("jose", $jose);
            displayTable("brian", $brian);
        echo "</table>";
    ?>
    
    
</body>
</html>