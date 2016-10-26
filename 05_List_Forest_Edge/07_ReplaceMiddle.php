<?php
function replaceMiddle($arr) {
    if(count($arr)%2 !== 0) {
        return $arr;
    }
    $replaceOne = count($arr)/2-1;
    $replaceTwo = $replaceOne+1;
    $result = array();
    foreach($arr as $key => $value) {
        if($key == $replaceOne) {
            $result[] = $arr[$replaceOne] + $arr[$replaceTwo];
        } elseif($key != $replaceTwo) {
            $result[] = $value;
        }
    }
    return $result;
}
