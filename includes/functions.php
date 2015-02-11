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
    for($index = 0; index < count($array); $index++){
        if($array[index] == $numToCompare and $array[index+1] == $suitToCompare)
            return true;
        $index++;
    }
    return false;
}

function displayTable($array1){
    echo "<tr>";
    for($index = 0; index < count($array); $index++){
        echo "<td>";
            echo "<img src='img/cards/" . $array[$index] . "/" . $array[$index+1] . ".png'>";
        echo "</td>";
        $index++;
    }
    echo "</tr>";
}

function createArray()
{
    $array = array();
    $counter = 0;
    while(counter < 5)
    {
        $randNum = rand(1,13);
        if(!(checkDuplicates($array,$randNum)))
        {
            $array[] = $randNum; 
            $counter++;
        }
        
    }
    return $array;
}