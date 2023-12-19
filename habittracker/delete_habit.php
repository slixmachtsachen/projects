<?php
function deleteUser($habitId)
{
    $db = new PDO('mysql:host=localhost;dbname=habittracker;charset=UTF8', 'root', '');
    $sql = "DELETE FROM habits WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $habitId);   
    $erg = $stmt->execute();

    return $erg;
}
$myid = $_GET["id"];

deleteUser($myid);
echo "habit has been deleted";