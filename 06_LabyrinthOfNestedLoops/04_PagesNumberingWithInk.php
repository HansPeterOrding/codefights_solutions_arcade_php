<?php
function pagesNumberingWithInk($current, $numberOfDigits) {
    while(true) {
        $neededDigits = strlen($current);
        if($neededDigits > $numberOfDigits) {
            $current--;
            break;
        }
        $numberOfDigits-=$neededDigits;
        $current++;
    }
    return $current;
}
