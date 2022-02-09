<?php 
    require_once('connection.php');

    $statement = $pdo->prepare("INSERT INTO notes (title, content, created)
                                           VALUES (:title, :content, :created)");
    $statement->bindValue('title', $_POST['title']);
    $statement->bindValue('content', $_POST['content']);
    $statement->bindValue('created', date('Y-m-d H:i:s'));
    $statement->execute();

    header('Location: index.php');
?>