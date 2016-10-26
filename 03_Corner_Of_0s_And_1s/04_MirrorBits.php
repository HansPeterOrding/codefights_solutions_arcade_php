<?php
function mirrorBits($a) {
    $bin = decbin($a);
    $return = "";
    for($i = 0; $i <= strlen($bin); $i++) {
        $return = substr($bin, $i, 1) . $return;
    }
    return bindec($return);
}
