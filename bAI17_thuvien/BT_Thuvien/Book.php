<?php
include './index.php';
include './database.php';
$query = 'SELECT * FROM quanlythuvien.book;';
$stmt = $pdo->query($query);
if (isset($_GET['idDelete'])) {
    $idDelete = $_GET['idDelete'];
    $queryDelete = "DELETE FROM `quanlythuvien`.`book` WHERE (`idBook` = '$idDelete');";
    $pdo->query($queryDelete);
    header('Location: Book.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <th>Id book</th>
        <th>Author</th>
        <th>Name Book</th>
        <th>NSX</th>
        <th>idCategory</th>
        <th>Borrow_idBorrow</th>
        <?php
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td><?= $row['idBook'] ?></td>
                <td><?= $row['Author'] ?></td>
                <td><?= $row['NameBook'] ?></td>
                <td><?= $row['NSX'] ?></td>
                <td><?= $row['idCategory'] ?></td>
                <td><?= $row['Borrow_idBorrow'] ?></td>


                <td><a href="Edit.php?idEdit=<?= $row['idBook']; ?>">Edit</a></td>
                <td><a href="Book.php?idDelete=<?= $row['idBook']; ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
    <a href="addBook.php">ADD</a>
</body>

</html>