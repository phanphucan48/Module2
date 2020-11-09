<?php
session_start();
$_SESSION['arrnum'] = [];
for ($i = 0; $i < 100; $i++) {
    array_push($_SESSION['arrnum'], $i);
}
if (!isset($_SESSION['min'])) {
    $_SESSION['min'] = 1;
    $_SESSION['max'] = 100;
}
if (isset($_POST['btn-play'])) {
    if (isset($_POST['soban'])) {
        $_SESSION['yournum'] = $_POST['soban'];
        findNum($_SESSION['arrnum'], 0, 100, $_POST['soban']);
    }
}
if (isset($_POST['btn-right'])) {
    $result = "chính xác";
}
if (isset($_POST['btn-reset'])) {
    session_destroy();
}







function findNum($arr, $min, $max, $num)
{
    $middleValue = $arr[floor($min + $max) / 2];
    if ($num == $middleValue) {
        echo "So can tim la $num";
        return;
    }
    if ($middleValue < $num) {
        echo "Số máy đoán là $middleValue nhỏ hơn";
        echo '<br>';
        return findNum($arr, floor($min + $max) / 2 + 1, $max, $num);
    } else {
        echo "Số máy đoán là $middleValue lớn hơn";
        echo '<br>';
        return findNum($arr, $min, floor($min + $max) / 2 - 1, $num);
    }
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
    <form action="" method="post">
        <h3>Nhập số bạn đoán từ 1- 100 </h3>
        <input type="text" name="soban" value="<?= $_SESSION['yournum'] ?? "" ?>">
        <h3>Nhập số máy đoán</h3>
        <input type="text" value="<?= $_SESSION['somay'] ?? "" ?>"><br>

        <input type="submit" value="reset" name="btn-reset">
        <input type="submit" value="chơi" name="btn-play">
        <input type="submit" value="chính xác" name="btn-right">

        <span><?= $result ?? "" ?></span>




    </form>
</body>

</html>