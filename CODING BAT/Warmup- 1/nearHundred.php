<?php
/******************************************************************************

Given an int n, return true if it is within 10 of 100 or 200. 
Note: Math.abs(num) computes the absolute value of a number.


nearHundred(93) → true
nearHundred(90) → true
nearHundred(89) → false
*******************************************************************************/

function nearHundred($number) : bool {
    if ($number >= 90 && $number <= 110 || $number >= 190 && $number <= 210) {
        return true;
    }
    else {
        return false;
    }
}
