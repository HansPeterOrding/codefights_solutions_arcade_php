<?php
function sofx($x) {
    $s = 0;
    for($i = 0; $i < strlen($x); $i++) {
        $s += (int)substr($x, $i, 1);
    }
    return $s;
}

function cacheComfort($L, $R) {
    for($i = $L; $i <= $R; $i++) {
        $s = sofx($i);
        for($j = $i - $s; $j <= $i + $s; $j++) {
            if($i !== $j) {
                $cache[$i][] = $j;
            }
        }
    }
    return $cache;
}

function comfortableNumbers($L, $R) {
    $cache = cacheComfort($L, $R);

    $comfortablePairs = array();
    $counter = 0;
    for($a = $L; $a <= $R; $a++) {
        $s = sofx($a);
        for($b = $a-$s; $b <= $a+$s; $b++) {
            if($a !== $b && $b >= $L && $b <= $R && $a < $b) {
                if(in_array($a, $cache[$b])) {
                    $counter++;
                    $comfortablePairs[$a][] = $b;
                }
            }
        }
    }
    return $counter;
}
