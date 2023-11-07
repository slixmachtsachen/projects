<?php
/******************************************************************************
Given a string, return a new string where the first and last chars have been exchanged.


frontBack("code") → "eodc"
frontBack("a") → "a"
frontBack("ab") → "ba"
*******************************************************************************/

function frontBack($word) : string {
    $vorne = substr($word, 0, 1);
    $hinten = substr($word, -1);
    $mitte = substr($word, 1, -1);
    
    return $hinten . $mitte . $vorne;
}

var_dump(frontBack("code"));
var_dump(frontBack("a"));
var_dump(frontBack("ab"));