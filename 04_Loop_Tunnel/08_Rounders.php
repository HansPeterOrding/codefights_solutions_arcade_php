<?php
function rounders($value) {
    $newNumber = '';
    $initialStrLen = strlen($value);
    for($i = strlen($value) - 1; $i >= 0; $i--) {
        if($i == 0) {
            if(strlen($value) > $initialStrLen) {
                $newNumber = substr($value, 0, (strlen($value)-$initialStrLen)+1) . $newNumber;
            } else {
                $newNumber = substr($value, 0, 1) . $newNumber;
            }
        } else {
            if((int)substr($value, $i, 1) >= 5) {
                $newNumber = 0 . $newNumber;
                $value += pow(10, strlen($value) - $i);
            } else {
                $newNumber = 0 . $newNumber;
            }
        }
    }
    return (int)$newNumber;
}
