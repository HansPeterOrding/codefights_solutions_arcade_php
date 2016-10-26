<?php
function differentRightmostBit($n, $m) {
    /**
     * $n^$m returns all differences
     * ~$n^$m returns the opposite (changed all bits)
     * adding 1 to this marks the first difference from the right other than the opposite
     * comparing with AND marks only this bit with a 1
     *
     * Example:
     * $n = 11                       = 1011
     * $m = 13                       = 1101
     * $n^$m                         = 0110 = x
     * ~$n^$m                        = 1001
     * ~$n^$m+1                      = 1010 = y
     * comparing x and y with AND    = 0010
     */
    return ($n^$m) & ((~$n^$m)+1);
}
