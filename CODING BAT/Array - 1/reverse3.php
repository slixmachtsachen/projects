<?php
/******************************************************************************
Given an array of ints length 3, return a new array 
with the elements in reverse order, so {1, 2, 3} becomes {3, 2, 1}.


reverse3([1, 2, 3]) → [3, 2, 1]
reverse3([5, 11, 9]) → [9, 11, 5]
reverse3([7, 0, 0]) → [0, 0, 7]
*******************************************************************************/

function reverse($arr) : array {
    $len = count($arr);
    $reversedArr = []; 
    
    for ($i = $len - 1; $i >= 0; $i--) {
        $reversedArr[] = $arr[$i]; 
    }
    
    return $reversedArr;
}

var_dump(reverse([1, 2, 3]));
var_dump(reverse([5, 11, 9]));
var_dump(reverse([7, 0, 0]));