<?php
function largestNumber($n)
{
    $string = "";
    for ($i = 1; $i <= $n; $i++) {
        $string .= '9';
    }
    return (int)$string;
}
