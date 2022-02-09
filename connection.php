<?php
    $host = 'localhost';
    $port = 3306;
    $user = 'root';
    $dbname = 'notes';

    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
    $pdo = new PDO('mysql:host='. $host .';port=' . $port . ';dbname=' . $dbname, $user, '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>