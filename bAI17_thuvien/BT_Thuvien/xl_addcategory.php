<?php
include './index.php';
include "./database.php";
// $idCategory = $_POST['idCategory'];

$CategoryName = $_POST['Category_Name'];

$query = "INSERT INTO `quanlythuvien`.`category` (`CategoryName`) VALUES ( '$CategoryName');";

try {
    $stmt = $pdo->query($query);
    if ($query) {
        header("location:./Category.php ");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
