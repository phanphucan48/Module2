<?php
include './index.php';
include './database.php';
$idEdit = $_GET['idEdit'];
$query = "SELECT * FROM quanlythuvien.book WHERE idBook = $idEdit;";
$stmt = $pdo->query($query);
$stmt = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Xl_edit.php" method="post">
        <h1>Edit </h1>
        <input type="hidden" name='id_book' value="<?= $idEdit; ?>">
        Author:
        <input type="text" name="author" value="<?= $stmt['Author'] ?>">
        Name:
        <input type="text" name="name" value="<?= $stmt['NameBook'] ?>">
        NSX:
        <input type="text" name="NSX" value="<?= $stmt['NSX'] ?>">
        idCategory:
        <input type="text" name="idCategory" value="<?= $stmt['idCategory'] ?>">
        Borrow_idBorrow:
        <input type="text" name="Borrow_idBorrow" value="<?= $stmt['Borrow_idBorrow'] ?>">



        <br><br>
        <input type="submit" value="UPDATE">

    </form>
</body>

</html>