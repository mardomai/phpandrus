<?php

require_once('connect.php');

$id = $_GET['id'];

$stmt = $pdo->prepare('UPDATE books SET is_deleted = 1 WHERE id = :id');
$stmt->execute(['id' => $id]);

// UPDATE table_name
// SET column1 = value1, column2 = value2, ...
// WHERE condition; 
