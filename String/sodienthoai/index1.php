<?php
if (isset($_POST['user_phone'])) {
    $phone = $_POST['user_phone'];
    check($phone);
}
function check($str)
{
    $Pattern = '/^[0-9]{2}\-0[0-9]{9}$/';
    if (preg_match($Pattern, $str)) {
        echo 'Số điện thoại hợp lệ';
    } else {
        echo "Số điện thoại ko hợp lệ";
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
        <input type="text" name="user_phone">
        <input type="submit" name="submit">
    </form>
</body>

</html>