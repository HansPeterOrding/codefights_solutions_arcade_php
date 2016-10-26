<?php
function rangeBitCount($a, $b) {
    $string = "";
    for($i = $a; $i <= $b; $i++) {
        $string .= decbin($i);
    }
    return substr_count($string, "1");
}
