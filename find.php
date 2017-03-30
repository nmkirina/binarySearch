<?php

if(isset($_POST['number'])){
    $number = $_POST['number'] + 0;
}

foreach ($_POST as $name => $value) {
    if (is_numeric($name)) {
        $numArray[$name] = $value + 0;
    }
}

$i = 0; 
$j = count($numArray) - 1;
$index = 0;

while (($j - $i) > 1) {
    
    $k = intval(($j + $i) / 2);
        
    if ($numArray[$k] > $number) {
        $j = $k;
    } else {
        $i = $k;
    }
    
    
    if($j == ($i + 1)) {
        if ($numArray[$i] >= $number){
            $index = $i;
        } else {
            $index = $j;
        }
    }
}

$_SESSION['index'] = $index;
$_SESSION['numArray'] = $numArray;
$_SESSION['number'] = $number;
include 'index.php';