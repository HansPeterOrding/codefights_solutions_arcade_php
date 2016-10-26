<?php
function arrayReplace($inputArray, $elemToReplace, $substitutionElem) {
    foreach($inputArray as $key => $value) {
        if($value == $elemToReplace) {
            $inputArray[$key] = $substitutionElem;
        }
    }
    return $inputArray;
}
