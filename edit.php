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

        <ul>
   
        <h1>Edit author</h1>
    <form method="POST">
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?= $book["title"]; ?>"><br><br>
        <label for="release_date">Release Date:</label>
        <input type="text" name="release_date" value="<?= $book["release_date"]; ?>"><br><br>

        <label for="price">Price:</label>
        <input type="text" name="price" value="<?= number_format($book["price"], 2); ?>"><br><br>

        <label for="author_id">Author:</label>
        <select name="author_id">
            <?php foreach ($authors as $author): ?>
                <option value="<?= $author['id']; ?>" <?= $author['id'] == $book['author_id'] ? 'selected' : ''; ?>>
                    <?= $author['name']; ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <input type="submit" value="Save">
    </form> 
</ul>

            <option value="">

            </option>
</form>
</body>
</html>

<h1>Muuda</h1> <?=$id ;?>