<?php
function metroCard($lastNumberOfDays) {
    $possibilities = [];
    $dayNumbers = [31,28,31,30,31,30,31,31,30,31,30,31];
    foreach($dayNumbers as $key => $number) {
        if($number == $lastNumberOfDays) {
            if(!empty($dayNumbers[$key+1])) {
                $possibilities[] =  $dayNumbers[$key+1];
            } else {
                $possibilities[] = $dayNumbers[0];
            }
        }
    }

    $possibilities=array_unique($possibilities);
    sort($possibilities);
    return $possibilities;
}
