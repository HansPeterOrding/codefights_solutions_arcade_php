<?php
function crosswordFormation($words) {
    $count = 0;
    for($i = 0; $i < 4; $i++) {
        $a = str_split($words[$i]);
        for($a1 = 0; $a1 < count($a); $a1++) {
            for($j = 0; $j < 4; $j++) {
                if($j == $i) {
                    continue;
                }
                $b = str_split($words[$j]);
                for($b2 = 0; $b2 <= count($b); $b2++) {
                    if($b[$b2] != $a[$a1]) {
                        continue;
                    }
                    for($b1 = 0; $b1 < $b2-1; $b1++) {
                        for($k = 0; $k < 4; $k++) {
                            if($k == $i || $k == $j) {
                                continue;
                            }
                            $c = str_split($words[$k]);
                            $d = str_split($words[6 - $i - $j - $k]);
                            if($b2 - $b1 >= count($d)) {
                                continue;
                            }
                            for($c1 = 0; $c1 < count($c)-1; $c1++) {
                                if($c[$c1] != $b[$b1]) {
                                    continue;
                                }
                                for($c2 = $c1+2; $c2 < count($c); $c2++) {
                                    $a2 = $a1 + ($c2 - $c1);
                                    if($a2 >= count($a)) {
                                        continue;
                                    }
                                    for($d1 = 0; $d1 < count($d); $d1++) {
                                        if($d[$d1] != $c[$c2]) {
                                            continue;
                                        }
                                        $d2 = $d1 + ($b2 - $b1);
                                        if($d2 >= count($d)) {
                                            break;
                                        }
                                        if($a[$a2] != $d[$d2]) {
                                            continue;
                                        }
                                        $count++;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    return $count;
}
