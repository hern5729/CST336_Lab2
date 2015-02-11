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
?>