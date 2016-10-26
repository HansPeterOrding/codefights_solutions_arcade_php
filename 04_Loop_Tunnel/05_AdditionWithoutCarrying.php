<?php
function additionWithoutCarrying($param1, $param2) {
    $falseSum = '';
    if($param1 > $param2) {
        $baseLength = strlen($param1);
    } else {
        $baseLength = strlen($param2);
    }
    for($i = 0; $i < $baseLength; $i++) {
        if(strlen($param1) - 1 - $i < 0) {
            $one = 0;
        } else {
            $one = substr($param1,strlen($param1)-1-$i,1);
        }

        if(strlen($param2) - 1 - $i < 0) {
            $two = 0;
        } else {
            $two = substr($param2,strlen($param2)-1-$i,1);
        }
        $sum = (int)$one + (int)$two;

        if($sum >= 10) {
            $sum -= 10;
        }
        $falseSum = $sum . $falseSum;
    }
    return (int)$falseSum;
}
