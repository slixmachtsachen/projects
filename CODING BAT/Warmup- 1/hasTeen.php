<?php
/******************************************************************************
We'll say that a number is "teen" if it is in the range 13..19 inclusive. 
Given 3 int values, return true if 1 or more of them are teen.


hasTeen(13, 20, 10) → true
hasTeen(20, 19, 10) → true
hasTeen(20, 10, 13) → true
*******************************************************************************/

function hasTeen($number1, $number2, $number3) : bool {
    if ($number1 >= 13 && $number1 <= 19 || $number2 >= 13 && $number2 <= 19 || $number3 >= 13 && $number3 <= 19) {
        return true;
    } else {
        return false;
    }
}

var_dump(hasTeen(13, 20, 10));
var_dump(hasTeen(20, 19, 10));
var_dump(hasTeen(20, 10, 13));