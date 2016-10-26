<?php
function getLowest($sequence) {
    $lowest = 10;
    foreach($sequence as $value) {
        if($value < $lowest) {
            $lowest = $value;
        }
    }
    return $lowest;
}
function getHighest($sequence) {
    $highest = -10;
    foreach($sequence as $value) {
        if($value > $highest) {
            $highest = $value;
        }
    }
    return $highest;
}

function makeArrayConsecutive2($sequence) {
    $lowest = getLowest($sequence);
    $highest = getHighest($sequence);
    $addcounter = 0;

    for($i = $lowest; $i <= $highest; $i++) {
        if(!in_array($i, $sequence)) {
            $addcounter++;
        }
    }

    return $addcounter;
}
