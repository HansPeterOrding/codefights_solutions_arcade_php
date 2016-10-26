<?php
function lineUp($commands) {
    $sameCounter = 0;
    $same = true;
    for($i = 0; $i < strlen($commands); $i++) {
        if(substr($commands, $i, 1) == 'L' || substr($commands, $i, 1) == 'R') {
            $same = $same?false:true;
            if($same) {
                $sameCounter++;
            }
        } elseif($same) {
            $sameCounter++;
        }
    }

    return $sameCounter;
}
