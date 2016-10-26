<?php
function leastFactorial($n) {
    $result = 1;
    $counter = 2;
    while($result < $n) {
        $result *= $counter;
        $counter++;
    }
    return $result;
}
