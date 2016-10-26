<?php
function knapsackLight($value1, $weight1, $value2, $weight2, $maxW) {
    // if both are lighter than maxW
    if($weight1 + $weight2 <= $maxW) {
        return $value1+$value2;
    }

    // Check all possible combinations
    if($value1 > $value2) {
        if($weight1 <= $maxW) {
            return $value1;
        } elseif($weight2 <= $maxW) {
            return $value2;
        } else {
            return 0;
        }
    } elseif($value2 > $value1) {
        if($weight2 <= $maxW) {
            return $value2;
        } elseif($weight1 <= $maxW) {
            return $value1;
        } else {
            return 0;
        }
    } else {
        if($weight1 <= $maxW) {
            return $value1;
        } elseif($weight2 <= $maxW) {
            return $value2;
        } else {
            return 0;
        }
    }
}
