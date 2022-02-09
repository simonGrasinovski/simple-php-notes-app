<?php 
    require_once('connection.php');

    $statement = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
    $statement->bindValue('id', $_GET['id']);
    $statement->execute();
    $note = $statement->fetch(PDO::FETCH_ASSOC);
?>