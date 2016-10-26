<?php
function getMiddle($arr)
{
    if(count($arr) % 2 == 0) {
        return $arr[count($arr)/2-1]+$arr[(count($arr)/2)];
    } else {
        return $arr[floor(count($arr)/2)];
    }
}

function isSmooth($arr) {
    if($arr[0] !== $arr[count($arr)-1]) {
        return false;
    }
    $middle = getMiddle($arr);
    if($middle !== $arr[0])  {
        return false;
    }
    return true;
}
