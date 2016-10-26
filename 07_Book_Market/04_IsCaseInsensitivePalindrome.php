<?php
function isCaseInsensitivePalindrome($inputString) {
    if(strtolower($inputString) == strrev(strtolower($inputString))) {
        return true;
    }
    return false;
}
