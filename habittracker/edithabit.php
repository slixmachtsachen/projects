<?php
function readUser($habitid)
{
    $db = new PDO('mysql:host=localhost;dbname=habittracker;charset=UTF8', 'root', '');
    $sql = 'SELECT * 
            FROM habits
            WHERE id = :id';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $habitid);  // oder bindValue
    $stmt->execute();

    $zeile = $stmt->fetch(PDO::FETCH_ASSOC);  // Nur ein Datensatz erwartet.

    return $zeile;
}    

$myid = $_GET["id"];

$result = readUser($myid);



?>


<!doctype html>
<html lang="de">

<head>
  <meta charset="utf-8">
</head>

<body>
  <h1>- Habittracker- </h1>
  <form action="auswertung_edit.php" method="get">

    <label for="bezeichnung">Bezeichnung</label>  
    <input type="text" name="titel" id="titel" value = "<?= $result['titel'];?>" maxlength="40">

    <input type="hidden" name="id" value="<?= $result['id'];?>">

    <button type="submit">Abschicken</button>
</form>

</body>
</html>