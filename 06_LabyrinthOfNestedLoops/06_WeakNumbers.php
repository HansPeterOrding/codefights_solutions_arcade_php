<?php
function cacheBaseData($n) {
    $baseData = array();
    for($i = 1; $i <= $n; $i++) {
        $divisorCounter = 0;
        $divisor = 1;
        while($divisor <= $i) {
            if($i % $divisor == 0) {
                $divisorCounter++;
            }
            $divisor++;
        }
        $baseData[$i]['divisorCount'] = $divisorCounter;
        $baseData[$i]['weakness'] = 0;
        foreach($baseData as $base) {
            if($divisorCounter < $base['divisorCount']) {
                $baseData[$i]['weakness']++;
            }
        }
    }
    return $baseData;
}

function weakNumbers($n) {
    $baseData = cacheBaseData($n);
    $maxWeakness = 0;
    $weaknessCount = 0;
    foreach($baseData as $data) {
        if($data['weakness'] == $maxWeakness) {
            $weaknessCount++;
        } else if($data['weakness'] > $maxWeakness) {
            $maxWeakness = $data['weakness'];
            $weaknessCount = 1;
        }
    }
    return array(
        $maxWeakness, $weaknessCount
    );
}