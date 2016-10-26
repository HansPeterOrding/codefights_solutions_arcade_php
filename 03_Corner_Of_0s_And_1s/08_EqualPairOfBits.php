<?php
function equalPairOfBits($n, $m) {
    /**
     * The first term gives all differences between the two numbers
     * The second term marks the first 0 (which is the first equality) as 1 and all following bits are set to 0
     * comparing these two terms marks all bits beginning with the first equality as 1 with leading 0s
     * adding one marks the bit before the first equality as 1 and sets everything else to 0
     * moving this one to the right gives the solution
     *
     * Example:
     * $n = 895 =           0000001101111111
     * $m = 928 =           0000001110100000
     * $m^$n =              0000000011011111 = x
     * $m^$n+1 =            0000000011100000 = y
     * x ^ y =              0000000000111111
     * x ^ y + 1 =          0000000001000000
     * >> 1 =               0000000000100000
     */
    return (((($n^$m)^($m^$n)+1))+1)>>1 ;
}
