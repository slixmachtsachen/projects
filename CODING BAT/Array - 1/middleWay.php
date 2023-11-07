<?php
/******************************************************************************
Given 2 int arrays, a and b, each length 3, 
return a new array length 2 containing their middle elements.

middleWay([1, 2, 3], [4, 5, 6]) → [2, 5]
middleWay([7, 7, 7], [3, 8, 0]) → [7, 8]
middleWay([5, 2, 9], [1, 4, 5]) → [2, 4]
*******************************************************************************/

function middleWay($arr1, $arr2) : array {
    $newArr = [];
    $middle1 = $arr1[1];
    $middle2 = $arr2[1];
    
    array_push($newArr, $middle1, $middle2);
    return $newArr;
}

var_dump(middleWay([1, 2, 3], [4, 5, 6]));
var_dump(middleWay([7, 7, 7], [3, 8, 0]));
var_dump(middleWay([5, 2, 9], [1, 4, 5]));
