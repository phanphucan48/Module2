<?php
include './index.php';
include './database.php';
$idcategory = $_POST['id_category'];
$CategoryName = $_POST['Category_Name'];
$query = "UPDATE `quanlythuvien`.`category` SET `CategoryName` = '$CategoryName' WHERE (`idCategory` = '$idcategory');";

try {
    $stmt = $pdo->query($query);
    if ($query) {
        header("location:./Category.php ");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
