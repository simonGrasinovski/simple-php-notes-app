<?php
    require_once('connection.php');

    $statement = $pdo->prepare("SELECT * FROM notes ORDER BY created DESC");
    $statement->execute();
    $notes = $statement->fetchAll(PDO::FETCH_ASSOC);
?>