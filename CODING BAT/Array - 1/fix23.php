<?php
/******************************************************************************

Given an int array length 3, if there is a 2 in the array immediately followed
by a 3, set the 3 element to 0. Return the changed array.


fix23([1, 2, 3]) → [1, 2, 0]
fix23([2, 3, 5]) → [2, 0, 5]
fix23([1, 2, 1]) → [1, 2, 1]
*******************************************************************************/

function fix23($arr) : array {
    $ersteStelle = $arr[0];
    $zweiteStelle = $arr[1];
    $dritteStelle = $arr[2];
    
    if ($ersteStelle == 2 && $zweiteStelle == 3) {
        $arr[1] = 0;
        return $arr;
    } elseif ($zweiteStelle == 2 && $dritteStelle == 3) {
        $arr[2] = 0;
        return $arr;
    }
    return $arr;
}

var_dump(fix23([1, 2, 3]));
var_dump(fix23([2, 3, 5]));
var_dump(fix23([1, 2, 1]));
