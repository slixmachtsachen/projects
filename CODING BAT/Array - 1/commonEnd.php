<?php
/******************************************************************************
Given 2 arrays of ints, a and b, return true if they have the same first element or they have the same last element. 
Both arrays will be length 1 or more.

commonEnd([1, 2, 3], [7, 3]) → true
commonEnd([1, 2, 3], [7, 3, 2]) → false
commonEnd([1, 2, 3], [1, 3]) → true
*******************************************************************************/

function commonEnd($a, $b) {
    $anfang1 = $a[0];
    $anfang2 = $b[0];
    $len1 = count($a) - 1;
    $len2 = count($b) - 1;
    $lastPos1 = $a[$len1];
    $lastPos2 = $b[$len2];
    
    if ($len1 >= 1 && $len2 >= 1) {
        if ($anfang1 == $anfang2 || $lastPos1 == $lastPos2) {
            return true;
        } else {
            return false;
        }
    }
}


var_dump(commonEnd([1, 2, 3], [7, 3]));
var_dump(commonEnd([1, 2, 3], [7, 3, 2]));
var_dump(commonEnd([1, 2, 3], [1, 3]));
