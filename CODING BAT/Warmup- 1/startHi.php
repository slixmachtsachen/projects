<?php
/******************************************************************************

Given a string, return true if the string starts with "hi" and false otherwise.


startHi("hi there") → true
startHi("hi") → true
startHi("hello hi") → false
*******************************************************************************/

function startHi($word) : bool {
    $hi = "hi";
    if (substr($word, 0, 2) == $hi) {
        return true;
    }
    return false;
}

var_dump(startHi("hi there"));
var_dump(startHi("hi"));
var_dump(startHi("hello hi"));
