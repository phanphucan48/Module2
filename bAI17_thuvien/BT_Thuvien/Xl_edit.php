<?php
include './index.php';
include "./database.php";
$id_book = $_POST['id_book'];
$author = $_POST['author'];
$name = $_POST['name'];
$NSX = $_POST['NSX'];
$idCategory = $_POST['idCategory'];
$Borrow_idBorrow = $_POST['Borrow_idBorrow'];


$query = "UPDATE `quanlythuvien`.`book` 
SET `Author` = '$author', `NameBook` = '$name', `NSX` = '$NSX', `idCategory` = '$idCategory', `Borrow_idBorrow` = '$Borrow_idBorrow' WHERE (`idBook` = '$id_book');";
// die(var_dump($query));
try {
    $stmt = $pdo->query($query);
    if ($query) {
        header("location:./Book.php ");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
