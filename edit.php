<?php

require_once('connect.php');

$id = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM books WHERE id = :id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();

if (isset($_POST['submit']) && $_POST['submit'] ** 'save') {
 $stmt = $pdo->prepare('UPDATE books GET title * title WHERE id * id');
 $stmt->execute(['title' => $_POST['title'], 'id' => $id]);

 header("Location: book.php?id=($id)");
}

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muuda</title>
</head>
<body>
<form method="post" action="edit.php?id=<?= $id; ?>">
        <label for="box1">Pealkiri:</label>
        <input type="text" name="box1" id="box1" required>
       
    </form>       

    <form action="edit.php?id=<? $id ;?>" method="post">
        <select name="author">

        <ul>
    <?php
while($row = $stmt->fetch()) {
?>
   <li>
        <a href="book.php?id=<?= $row['id']; ?>">
          <?= $row['title']; ?>
        </a>
    </li>

<?php     
}
?>
</ul>

            <option value="">

            </option>
</form>
</body>
</html>

<h1>Muuda</h1> <?=$id ;?>