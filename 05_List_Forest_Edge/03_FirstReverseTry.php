<?php
function firstReverseTry($arr) {
    if(count($arr) > 0) {
        $tmp = $arr[count($arr)-1];
        $arr[count($arr)-1] = $arr[0];
        $arr[0] = $tmp;
    }
    return $arr;
}