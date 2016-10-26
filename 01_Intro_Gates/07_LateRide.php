<?php
function lateRide($n) {
    $minutes = 0;
    $hours = 0;
    for($i = 0; $i < $n; $i++) {
        $minutes++;
        if($minutes == 60) {
            $hours++;
            $minutes = 0;
        }
    }

    $hours = str_pad($hours, 2, "0", STR_PAD_LEFT);
    $minutes = str_pad($minutes, 2, "0", STR_PAD_LEFT);

    return (int)substr($hours, 0, 1) + (int)substr($hours, 1, 1) + (int)substr($minutes, 0, 1) + (int)substr($minutes, 1, 1);
}
