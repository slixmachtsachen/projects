<?php
/******************************************************************************
Given a non-empty string and an int n, 
return a new string where the char at index n has been removed. 
The value of n will be a valid index of a char in the original string 
(i.e. n will be in the range 0..str.length()-1 inclusive).


missingChar("kitten", 1) → "ktten"
missingChar("kitten", 0) → "itten"
missingChar("kitten", 4) → "kittn"
*******************************************************************************/

function missingChar($word, $number) : string {
    $part1 = substr($word, 0, $number);
    $part2 = substr($word, $number + 1);
    return $part1 . $part2;
}

var_dump(missingChar("kitten", 1));
var_dump(missingChar("kitten", 0));
var_dump(missingChar("kitten", 4));