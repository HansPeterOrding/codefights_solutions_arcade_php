<?php
function removeArrayPart($inputArray, $l, $r) {
    $result = array();
    foreach($inputArray as $key => $value) {
        if($key < $l || $key > $r) {
            $result[] = $value;
        }
    }
    return $result;
}
