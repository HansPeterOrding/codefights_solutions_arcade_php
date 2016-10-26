<?php
function isPower($n) {
    for($i = 0; $i < 19; $i++) {
        for($j = 2; $j < 10; $j++) {
            if(pow($i, $j) == $n) {
                return true;
            }
        }
    }
    return false;
}
