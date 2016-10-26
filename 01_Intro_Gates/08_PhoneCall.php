<?php
function phoneCall($min1, $min2_10, $min11, $S) {
    $counter = 0;
    while($S > 0) {
        if($counter == 0) {
            $S -= $min1;
        } elseif($counter < 10) {
            $S -= $min2_10;
        } else {
            $S -= $min11;
        }
        if($S >= 0) {
            $counter++;
        }
    }
    return $counter;
}