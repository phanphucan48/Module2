<?php
include './index.php';
include "./database.php";
$author = $_POST['author'];
$name = $_POST['name'];
$NSX = $_POST['NSX'];
$idCategory = $_POST['idCategory'];
$Borrow_idBorrow = $_POST['Borrow_idBorrow'];


$query = "INSERT INTO quanlythuvien.book(Author,NameBook,NSX,idCategory,Borrow_idBorrow ) values ('$author','$name','$NSX','$idCategory','$Borrow_idBorrow' );";
// die(var_dump($query));
try {
    $stmt = $pdo->query($query);
    if ($query) {
        header("location:./Book.php ");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
