<?php
/******************************************************************************
Given an int n, return the absolute difference between n and 21, 
except return double the absolute difference if n is over 21.

diff21(19) → 2
diff21(10) → 11
diff21(21) → 0
*******************************************************************************/

function diff21($absolute) : int {
    $result = 21 - $absolute;
    
    if ($result > 21) {
        $result2 = $result * 2;
        return $result2;
    }
    return $result;
}


var_dump(diff21(19));
var_dump(diff21(10));
var_dump(diff21(21));
