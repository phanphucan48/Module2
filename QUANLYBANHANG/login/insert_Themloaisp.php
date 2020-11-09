<?php
include './connect.php';
//  $query = 'SELECT * FROM quanlybanhang.loaisanpham;';
$tenloai = $_POST['tenloai'];

$query = "INSERT INTO `quanlybanhang`.`loaisanpham` ( `TenLoai`) VALUES ( '$tenloai');";
if (isset($tenloai)) {
    try {
        $stmt = $pdo->query($query);
        if ($query) {
            header("location:Loaisanpham.php ");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
