<?php
function killKthBit($n, $k) {
    return ~ pow(2, $k-1) & $n;
}
