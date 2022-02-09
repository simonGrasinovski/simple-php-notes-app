<?php 
    require_once('connection.php');

    $statement = $pdo->prepare("UPDATE notes SET title = :title, content = :content WHERE id = :id");
    $statement->bindValue('id', $_POST['id']);
    $statement->bindValue('title', $_POST['title']);
    $statement->bindValue('content', $_POST['content']);
    $statement->execute();

    header('Location: index.php');
?>