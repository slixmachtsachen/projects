<?php
/******************************************************************************
Return true if the given string begins with "mix", 
except the 'm' can be anything, so "pix", "9ix" .. all count.


mixStart("mix snacks") → true
mixStart("pix snacks") → true
mixStart("piz snacks") → false
*******************************************************************************/

function mixStart($word) : bool {
    $part1 = substr($word, 1, 2);
    
    if($part1 == "ix") {
        return true;
    } else {
        return false;
    }
}

var_dump(mixStart("mix snacks"));
var_dump(mixStart("pix snacks"));
var_dump(mixStart("piz snacks"));
