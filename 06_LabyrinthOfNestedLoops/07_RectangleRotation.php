<?php
function rotatePoint($x, $y) {
    $xnew = $x * cos(deg2rad(45)) - $y * sin(deg2rad(45));
    $ynew = $x * sin(deg2rad(45)) + $y * cos(deg2rad(45));

    return array($xnew, $ynew);
}

function calculateValue($p1, $p2, $x) {
    $y = ((($p2[1] - $p1[1]) / ($p2[0] - $p1[0])) * $x) + ($p2[0]*$p1[1]-$p1[0]*$p2[1])/($p2[0]-$p1[0]);
    return $y;
}

function rectangleRotation($a, $b) {
    $upperLeft = rotatePoint(-1*$a/2, $b/2);
    $upperRight = rotatePoint($a/2, $b/2);
    $lowerLeft = rotatePoint(-1*$a/2, -1*$b/2);
    $lowerRight = rotatePoint($a/2, -1*$b/2);

    $minX = $upperLeft[0];
    $maxX = -1 * $minX;
    $minY = $lowerLeft[1];
    $maxY = -1 * $minY;

    $counter = 0;

    for($i = floor($minX); $i <= ceil($maxX); $i++) {
        for($j = floor($minY); $j <= ceil($maxY); $j++) {
            $valueUpperHor = calculateValue($upperLeft, $upperRight, $i);
            $valueRightVer = calculateValue($upperRight, $lowerRight, $i);
            $valueLowerHor = calculateValue($lowerLeft, $lowerRight, $i);
            $valueLeftVer = calculateValue($upperLeft, $lowerLeft, $i);

            if($j < $valueUpperHor && $j > $valueLeftVer && $j > $valueLowerHor && $j < $valueRightVer) {
                $counter++;
            }
        }
    }

    return $counter;
}
