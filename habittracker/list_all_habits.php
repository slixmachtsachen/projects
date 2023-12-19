<body style="background-color:#1c87c9;color:#FFFFFF">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php
// bindParam übergibt eine Variable als Referenz

function listAllHabits() {
try {
    $db = new PDO('mysql:host=localhost;dbname=habittracker;charset=UTF8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT * 
            FROM habits';
    $stmt = $db->prepare($sql);
    $zeile = $stmt->execute();


    echo '<pre>';
    while ($zeile = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //print_r($zeile);
        echo "{$zeile['id']}: {$zeile['titel']}"; // Geschweifte Klammern bei arrayzugriff im String.
        echo "<a class='btn btn-primary' href='edithabit.php?id= {$zeile['id']}'>EDIT</a>";
        echo "<a class='btn btn-danger ml-3' href='delete_habit.php?id= {$zeile['id']}'>DELETE</a><br>\n";
    }

    echo '</pre>';
    
} catch (PDOException $e) {
    echo 'FEHLER: ' . $e->getMessage();
}
}
listAllHabits();
?>
</body>

