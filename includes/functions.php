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

function checkDuplicates($array, $valueToCompare){
    for($index = 0; index < count($array); $index++){
        if($array[index] == $valueToCompare)
            return true;
    }
    return false;
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
?>