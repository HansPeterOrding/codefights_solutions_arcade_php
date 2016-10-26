<?php
function isTandemRepeat($inputString) {
    if(strlen($inputString)%2 != 0) {
        return false;
    }
    if(substr($inputString, 0, strlen($inputString)/2) == substr($inputString, strlen($inputString)/2)) {
        return true;
    }
    return false;
}
