<?php
function htmlEndTagByStartTag($startTag) {
    $ex = explode(" ", $startTag);
    $base = str_replace(array("<", ">"), array("", ""), $ex[0]);
    return "</".$base.">";
}
