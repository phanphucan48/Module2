<?php
session_start();
$_SESSION['arrnum'] = [];
for ($i = 1; $i < 100; $i++) {
    array_push($_SESSION['arrnum'], $i);
}
if (!isset($_SESSION['min'])) {
    $_SESSION['min'] = 1;
    $_SESSION['max'] = 100;
}
if (isset($_POST['btn-play'])) {
    if (isset($_POST['yournumber'])) {
        $_SESSION['yournumber'] = $_POST['yournumber'];
        // $_SESSION['numberguest'] = floor(($_SESSION['min'] + $_SESSION['max']) / 2);
        findNum($_SESSION['arrnum'], 0, 100, $_POST['yournumber']);
    }
}
if (isset($_POST['btn-below'])) {
    $_SESSION['min'] = $_SESSION['numberguest'];
    $_SESSION['numberguest'] = floor(($_SESSION['min'] + $_SESSION['max']) / 2);
}
if (isset($_POST['btn-high'])) {
    $_SESSION['max'] = $_SESSION['numberguest'];
    $_SESSION['numberguest'] = floor(($_SESSION['min'] + $_SESSION['max']) / 2);
}
if (isset($_POST['btn-right'])) {
    $result = "máy giỏi lắm";
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
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .form {
            width: 500px;
            height: 500px;
            margin: auto;
        }

        .form__heading {
            width: 100%;
        }

        .form-wrap {
            width: 100%;
            display: flex;
            justify-content: center;
            border: 1px solid green;
        }

        .form__btn {
            margin: 10px 0;
        }
    </style>
    <title>Đoán số</title>
</head>

<body>
    <div class="form">
        <form action="" method="post" class="form-wrap">
            <div>
                <div class="form__heading">
                    <h4>Nhập sô bạn muốn máy đoán từ 1-100</h4>
                    <input type="text" name="yournumber" value="<?= $_SESSION['yournumber'] ?? "" ?>">
                    <h4>Số máy đoán</h4>
                    <input type="text" name="number-guest" value="<?= $_SESSION['numberguest'] ?? "" ?>">
                    <span><?= $result ?? "" ?></span>
                </div>
                <div class="form__btn">
                    <input type="submit" value="reset" name="btn-reset">
                    <input type="submit" value="play" name="btn-play">
                </div>
            </div>
        </form>
    </div>
</body>

</html>