<?php
function circleOfNumbers($n, $firstNumber) {
    $result = $firstNumber + ($n/2);
    if($result >= $n) {
        $result -= $n;
    }
    return $result;
}