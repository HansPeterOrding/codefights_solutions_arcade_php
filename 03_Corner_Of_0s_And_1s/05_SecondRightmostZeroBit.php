<?php
function secondRightmostZeroBit($n) {
    /**
     * $n | $n+1 sets rightmost zero bit to 1
     * ($n | $n+1) + 1 sets all bits after second zero to 0 and second zero to 1
     * combining these terms with XOR (^) gives leading zeros until second rightmost zero of original term and then only 1s
     * adding 1 again turns all 1s to zeros and adds only one 1 in front of them
     * moving to the right one position returns the exact position of the second rightmost 0
     *
     * Example:
     * $n = 37               = 100101
     * $n | $n + 1           = 100111
     * ($n | $n + 1) + 1     = 101000
     * XOR of the above      = 001111
     * +1 to that            = 010000
     * >> 1                  = 001000
     */
    return ((($n | $n+1) ^ (($n | $n + 1) + 1)) + 1) >> 1;
}
