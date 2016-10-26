<?php
function countSumOfTwoRepresentations2($n, $l, $r) {
    $hits = array();
    for($i = $l; $i <= $n/2; $i++) {
        if($n-$i <= $r) {
            $hits[$i] = $n - $i;
        }
    }
    return count($hits);
}
