<?php
function getSquare($a)
{
    $square = 0;
    for($i = 0; $i < strlen($a); $i++) {
        $number = (int)substr($a, $i, 1);
        $square+= $number*$number;
    }
    return $square;
}
function squareDigitsSequence($a0) {
    $squares = array();
    $counter = 1;

    while(true) {
        $squares[] = $a0;
        $counter++;
        $result = getSquare($a0);
        $a0 = $result;
        unset($result);
        if(in_array($a0, $squares)) {
            break;
        }

    }

    return $counter;
}
