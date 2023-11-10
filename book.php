<?php

require_once('connect.php');

$id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM books WHERE id = :id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();

$stmt = $pdo->prepare('SELECT * FROM book_authors ba LEFT JOIN authors a ON ba.author_id=a.id WHERE book_id = :id');
$stmt->execute(['id' => $id ]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $book['title'] ?></h1>
    <span style="font-size: 18px;">Aasta</span> <span style="font-size: 32px">1988</span>
    <br><br>
    <span style></span>

    <ul>
        <?php
        while ($row = $stmt->fetch()) {
        ?>


            <li>
                <?=$row['first_name']?><?$row['last_name']; ?>
        </a>
            </li>

<?php
        }
?>
    </ul>

        <a href="edit.php?id=<?= $id; ?>">Muuda</a>
        <a href="delete.php?id=<?= $id; ?>">Kustuta</a>
      

</body>
</html>