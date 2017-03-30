<?php

const MIN_ARRAY_SIZE = 1;
const MAX_ARRAY_SIZE = 10;
const MAX_ITEM_VALUE = 100;
const MIN_ITEM_VALUE = 1;

$arraySize = random_int(MIN_ARRAY_SIZE, MAX_ARRAY_SIZE);
$numArray = array();

for($i = 0; $i < $arraySize; $i++){
    
    $newItem = random_int(MIN_ITEM_VALUE, MAX_ITEM_VALUE);
    if($i > 0){
        
        if($newItem > $numArray[$i-1]){
            $numArray[] = $newItem;
        } else {
                $k = $i-1;
                while(($newItem < $numArray[$k]) && ($k >= 0)){
                    $numArray[$k] += $newItem;
                    $numArray[$k+1] = $numArray[$k] - $newItem;
                    $numArray[$k] -= $numArray[$k+1];
                    $k--;  
                }
            
        }
    } else {
        $numArray[] = $newItem;
    }
}

session_start();
session_unset();
$_SESSION['numArray'] = $numArray;
$_SESSION['findNum'] = random_int(MIN_ITEM_VALUE, MAX_ITEM_VALUE);
include 'index.php';