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

function updateHabit($titel, $id) // $useId -> welcher User soll geändert werden.
{
    $db = new PDO('mysql:host=localhost;dbname=habittracker;charset=UTF8', 'root', '');
    $data = [
        ':titel' => $titel,
        ':id' => $id,
    ];
    $sql = "UPDATE habits SET titel=:titel WHERE id=:id";
    $stmt= $db->prepare($sql);
    $res = $stmt->execute($data);

    return $res;
}
//var_dump($_GET);
 // $_GET ist ein globales, vordefiniertes Array (Map),
$mytitel = $_GET["titel"]; // welches alle Get Werte enthält.
$myid = $_GET["id"];

updateHabit($mytitel, $myid);
echo "Habit mit der ID: $myid wurde auf $mytitel geändert";
?>
<a href="start.php">Weiter zur Startseite</a>