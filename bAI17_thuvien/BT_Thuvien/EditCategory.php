<?php
include './index.php';
include './database.php';
$idEditCategory = $_GET['idEditCategory'];
$query = "SELECT * FROM quanlythuvien.category WHERE idCategory = $idEditCategory;";
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
    <form action="xl_EditCategory.php" method="post">
        <h1>Edit</h1>
        <input type="hidden" name="id_category" value="<?= $idEditCategory; ?>">
        Category Name :
        <input type="text" name="Category_Name" value="<?= $stmt['CategoryName']; ?>">
        <br><br>
        <input type="submit" value="UPDATE">

    </form>

</body>

</html>