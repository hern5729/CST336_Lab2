<?php

function generateRandomSuit(){
    $suit = rand(1,4);
    switch($suit){
        case 1: $folder = "clubs";
        break;
        case 2: $folder = "diamonds";
        break;
        case 3: $folder = "hearts";
        break;
        case 4: $folder = "spades";
        break;
    }
    return $folder;
}

function checkDuplicates($array, $numToCompare, $suitToCompare){
    for($index = 0; $index < count($array); $index++){
        if($array[$index+1] == $numToCompare)
            return true;
        $index++;
    }
    return false;
}

function displayTable($name , $array){
    $total = 0;
    echo "<tr>";
    echo "<td><img src='img/teamImages/" . $name . ".png'></td>";
    for($index = 0; $index < count($array); $index++){
        $total = $total + $array[$index+1];
        echo "<td>";
            echo "<img src='img/cards/" . $array[$index] . "/" . $array[$index+1] . ".png'>";
        echo "</td>";
        $index++;
    }
    echo "<td>". $total . "</td>";
    echo "</tr>";
}

function createArray()
{
    $array = array();
    $counter = 0;
    while($counter < 5)
    {
        $randNum = rand(1,13);
        $randSuit = generateRandomSuit();
        if(!(checkDuplicates($array,$randNum, $randSuit)))
        {
            array_push($array, $randSuit, $randNum); 
            
            $counter++;
        }
        
    }
    return $array;
}

?>
