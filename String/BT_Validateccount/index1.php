<?php
if (isset($_POST['user_account'])) {
    $account = $_POST['user_account'];
    check($account);
}
function check($str)
{
    $Pattern = '/^[_a-z0-9]{6,}$/';
    if (preg_match($Pattern, $str)) {
        echo 'tài khoản hợp lệ';
    } else {
        echo "tài khoản ko hợp lệ";
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
        <input type="text" name="user_account">
        <input type="submit" name="submit">
    </form>
</body>

</html>