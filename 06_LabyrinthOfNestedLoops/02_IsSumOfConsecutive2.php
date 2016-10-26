<?php
function isSumOfConsecutive2($n) {
    $counter = 0;
    for($i = 1; $i <= $n-1; $i++) {
        $sum = $i;
        for($j = $i+1; $j < $i+7; $j++) {
            $sum+= $j;
            if($sum == $n) {
                $counter++;
                break;
            }
        }
    }
    return $counter;
}
