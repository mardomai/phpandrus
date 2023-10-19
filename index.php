<?php

require_once('config.php');

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);

$stmt = $pdo->query('SELECT * FROM books')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello,PDO!</title>
</head>
<body>
    
<ul>
    <?php
while($row = $stmt->fetch()) {
   var_dump
?>
   <li>
        <a href="book.php">
          <?= $row['title']; ?>
        </a>
    </li>

<?php     
}
?>
</ul>