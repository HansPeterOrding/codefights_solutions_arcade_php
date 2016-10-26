<?php
function appleBoxes($k) {
    $yellow = 0;
    $red = 0;
    for($i = 1; $i <= $k; $i++) {
        if($i%2 == 0) {
            $red += $i*$i;
        } else {
            $yellow += $i*$i;
        }
    }
    return $red - $yellow;
}
