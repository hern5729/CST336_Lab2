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
    
        echo "<table align = 'center'>";
            displayTable("monse", $monse);
            displayTable("addie", $addie);
            displayTable("jose", $jose);
            displayTable("brian", $brian);
                    //buttonPushed();    
    echo "</table>";
        
    ?>
    
    <?php
        function buttonPushed()
{
        $addie = createArray();
        $jose = createArray();
        $brian = createArray();
       echo "<table align = 'center'>";
            displayTable("monse", $monse);
            displayTable("addie", $addie);
            displayTable("jose", $jose);
            displayTable("brian", $brian);
        echo "</table>";

}

    ?>
    <form action="">
     <input  id="btn" type="submit" value="Play Again" style="background-color: green; color:#fff"/>
    </form>
    
</body>
</html>