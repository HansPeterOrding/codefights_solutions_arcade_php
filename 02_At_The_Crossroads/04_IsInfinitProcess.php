<?php
function isInfiniteProcess($a, $b) {
    if($a == $b) {
        return false;
    }
    if(($a - $b) % 2 == 0 && $a < $b) {
        return false;
    }
    return true;
}
