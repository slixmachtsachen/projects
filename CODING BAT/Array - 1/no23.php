<?php
/******************************************************************************
Given an int array length 2, return true if it does not contain a 2 or 3.

no23([4, 5]) → true
no23([4, 2]) → false
no23([3, 5]) → false
*******************************************************************************/

function no23($arr) : bool {
    $len = count($arr);
    
    for ($i = 0; $i <= $len - 1; $i++) {
        if ($arr[$i] == 2 || $arr[$i] == 3) {
            return false;
        } 
    }
    
    return true;
}

var_dump(no23([4, 5]));
var_dump(no23([4, 2]));
var_dump(no23([3, 5]));
