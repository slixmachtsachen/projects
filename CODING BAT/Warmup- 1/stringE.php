<?php
/******************************************************************************
Return true if the given string contains between 1 and 3 'e' chars.

stringE("Hello") → true
stringE("Heelle") → true
stringE("Heelele") → false
*******************************************************************************/

function stringE($word) : bool {
    $count = 0;
    for ($i = 0; $i < strlen($word); $i++) {
        if ($word[$i] == "e") {
            $count++; 
        }
    }
    if ($count >= 1 && $count <= 3) {
        return true;
    } else {
        return false;
    }
}


var_dump(stringE("Hello"));
var_dump(stringE("Heelle"));
var_dump(stringE("Heelele"));
