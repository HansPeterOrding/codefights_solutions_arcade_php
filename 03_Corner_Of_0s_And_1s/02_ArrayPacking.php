<?php
function arrayPacking($a) {
    $output = "";
    foreach($a as $val) {
        $output = str_pad(decbin($val), 8, "0", STR_PAD_LEFT) . $output;
    }
    return bindec($output);
}
