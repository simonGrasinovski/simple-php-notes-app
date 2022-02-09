<?php
    require_once('connection.php');

    $statement = $pdo->prepare("DELETE FROM notes WHERE id = :id");
    $statement->bindValue('id', $_POST['id']);
    $statement->execute();

    header('Location: index.php');
?>