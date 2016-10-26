<?php
function increaseNumberRoundness($n) {
    $foundNonZero = false;
    $increasable = false;
    for($i = strlen($n)-1; $i >= 0; $i--) {
        if(!$foundNonZero && substr($n, $i, 1) !== '0') {
            $foundNonZero = true;
        } elseif($foundNonZero && substr($n, $i, 1) == '0') {
            $increasable = true;
        }
    }
    return $increasable;
}
