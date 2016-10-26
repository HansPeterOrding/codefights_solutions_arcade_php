<?php
function swapAdjacentBits($n) {
    /**
     * the two numbers 2863311530 and 1431655765 represent the following binary numbers:
     * 2863311530 = 10101010101010101010101010101010
     * 1431655765 = 01010101010101010101010101010101
     * the left term gives all odd positioned bits ($n & 2863311530) and moves them to the even positions
     * the right term gibes all even positioned bits ($n & 1431655765) and moves them to the odd positions
     * combining these terms with OR gives the correct solution
     *
     * Example:
     * $n = 14          =                             1101
     * 2863311530       = 10101010101010101010101010101010
     * $n & 2863311530  = 00000000000000000000000000001000
     * >> 1             =                              100 = x
     *
     * 1431655765       = 01010101010101010101010101010101
     * $n & 1431655765  = 00000000000000000000000000000101
     * << 1             =                             1010 = x
     *
     * combined x and y with OR =                     1110
     */
    return (($n & 2863311530) >> 1) | (($n & 1431655765) << 1) ;
}
