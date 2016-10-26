<?php
function concatenateArrays($a, $b) {
    foreach($b as $value) {
        $a[] = $value;
    }
    return $a;
}