<?php
function countBlackCells($n, $m) {
    $steigung = $n/$m;
    $currentPositionX = 1;
    $currentPositionY = 1;
    $counter = 1;
    while($currentPositionX < $m || $currentPositionY < $n) {
        if($currentPositionY / $currentPositionX  > $steigung) {
            $currentPositionX++;
            $counter++;
        } elseif($currentPositionY / $currentPositionX < $steigung) {
            $currentPositionY++;
            $counter++;
        } elseif($currentPositionY / $currentPositionX == $steigung) {
            $currentPositionX++;
            $currentPositionY++;
            $counter++;
            $counter++;
            $counter++;
        }
    }
    return $counter;
}
