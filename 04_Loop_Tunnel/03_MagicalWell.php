<?php
function magicalWell($a, $b, $n) {
    $result = 0;
    for($i = 1; $i <= $n; $i++) {
        $result += $a*$b;
        $a++;
        $b++;
    }
    return $result;
}
