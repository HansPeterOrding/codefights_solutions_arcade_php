<?php
function candles($candles, $makeNew) {
    $leftOvers = 0;
    $burntCandles = 0;
    while($candles > 0) {
        $leftOvers += $candles;
        $burntCandles += $candles;
        $candles = floor($leftOvers/$makeNew);
        $leftOvers -= $candles*$makeNew;
    }
    return $burntCandles;
}
