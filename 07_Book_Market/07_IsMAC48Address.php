<?php
function isMAC48Address($inputString) {
    return preg_match('/^(([0-9a-fA-F]){2}-){5}[0-9a-fA-F][0-9a-fA-F]$/', $inputString);
}
