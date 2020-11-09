<?php
include './index.php';
include './database.php';
$query = 'SELECT * FROM quanlythuvien.category;';
$stmt = $pdo->query($query);
if (isset($_GET['DeleteCategory'])) {
    $DeleteCategory = $_GET['DeleteCategory'];
    $queryDelete = "DELETE FROM `quanlythuvien`.`category` WHERE (`idCategory` = '$DeleteCategory');";
    $pdo->query($queryDelete);
    header('Location: Category.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <table class="tb_category">
        <div>
            <th>Id Category </th>
            <th>Name Category</th>
            <th></th>
        </div>

        <?php
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td><?= $row['idCategory'] ?></td>
                <td><?= $row['CategoryName'] ?></td>

                <td>
                    <a href="EditCategory.php?idEditCategory=<?= $row['idCategory']; ?>">Edit</a>
                    <a href="Category.php?DeleteCategory=<?= $row['idCategory']; ?>">Delete</a>
                </td>

            </tr>

        <?php } ?>





    </table>
    <div class="add"><a href="Add_Category.php">ADD</a></div>


</body>

</html>