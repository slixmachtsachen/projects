<?php
function updateHabit($id, $titel) 
{
    $db = new PDO('mysql:host=localhost;dbname=habittracker;charset=UTF8', 'root', '');
    $data = [
        ':id' => $id,
        ':titel' => $titel,
    ];
    $sql = "UPDATE habits SET titel=:titel WHERE id=:id";
    $stmt= $db->prepare($sql);
    $res = $stmt->execute($data);

    return $res;
}
updateHabit(7, "football");
echo "habit is updated";
?>