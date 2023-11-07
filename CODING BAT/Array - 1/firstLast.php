<?php
/******************************************************************************
Given an array of ints, return true if 6 appears as either the first or last element in the array. 
The array will be length 1 or more.

firstLast6([1, 2, 6]) → true
firstLast6([6, 1, 2, 3]) → true
firstLast6([13, 6, 1, 2, 3]) → false
*******************************************************************************/

function arrayVald($arr) : bool
{
    $anfang = $arr[0];
    $len = count($arr);
    $lastPos = $len - 1;
    $ende = $arr[$lastPos];
    
    if ($len <= 1) {
        echo "Das Array ist zu kurz / ";
        return false;
    }
    elseif($anfang == 6 || $ende == 6) {
        return true;
    }
    return false;
}

$arr = [1, 2, 6];
$arr2 = [6, 1, 2, 3];
$arr3 = [13, 6, 1, 2, 3];

var_dump(arrayVald($arr));
var_dump(arrayVald($arr2));
var_dump(arrayVald($arr3));