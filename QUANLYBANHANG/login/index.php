<?php
include './connect.php';
$query = 'SELECT * FROM quanlybanhang.login;';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThemLoaiSanPham</title>
</head>

<body>
    <form action="index.php?action=abc" method="post">
        <label for="">Tai Khoản</label>
        <br />
        <input type="text" name='name'>
        <br>
        <label for="">Password</label>
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit" name="submit" />


    </form>
    <?php

    if (isset($_GET['action']) && $_GET['action'] === 'abc') {
        // die(var_dump($_POST['name']));
        if (isset($_POST['name']) && isset($_POST['password'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
            // die(var_dump($name));


            $query = "INSERT INTO `quanlybanhang`.`login` (`login_name`, `password`) VALUES ('$name', '$password ');";
            $stmt = $pdo->query($query);
        }
    }

    ?>


</body>

</html>