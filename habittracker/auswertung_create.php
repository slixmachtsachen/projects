<?php

function createHabit($bezeichnung)
{
  //---------------------------------------------------------------
    // 1: C = Create
    //    Erzeuge einen neuen Datensatz
    $db = new PDO('mysql:host=localhost;dbname=habittracker;charset=UTF8', 'root', '');
    
    $sql = 'INSERT INTO habits 
           (titel)
            VALUES (:sqlbezeichnung)';
    $stmt = $db->prepare($sql);
    $daten = [
        ':sqlbezeichnung' => $bezeichnung
    ];
    $erg = $stmt->execute($daten);  // assoziatives array

    return $erg;
}
//var_dump($_GET);
 // $_GET ist ein globales, vordefiniertes Array (Map),
$mybezeichnung = $_GET["bezeichnung"]; // welches alle Get Werte enthält.
echo "<br><br>Es wurde eingegeben: $mybezeichnung";

createHabit($mybezeichnung);
?>