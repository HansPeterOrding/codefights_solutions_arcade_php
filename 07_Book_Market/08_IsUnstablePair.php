<?php
function isUnstablePair($filename1, $filename2) {
    if($filename1 > $filename2 && strtolower($filename1) > strtolower($filename2)) {
        return false;
    } elseif($filename1 < $filename2 && strtolower($filename1) < strtolower($filename2)) {
        return false;
    }
    return true;
}
