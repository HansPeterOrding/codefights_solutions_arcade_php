<?php
function arithmeticExpression($A, $B, $C) {
    if($A+$B==$C || $A-$B==$C || $A*$B==$C || ($B !== 0 && $A/$B==$C)) {
        return true;
    }
    return false;
}
