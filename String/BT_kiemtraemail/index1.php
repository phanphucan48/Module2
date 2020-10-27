<?php
if (isset($_POST['user_email'])) {
    $email = $_POST['user_email'];
    checkemail($email);
}

function checkemail($str)
{
    $regexp = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($regexp, $str)) {
        echo "Đây là email hợp lệ";
    } else {
        echo "Đây không phải là e mail";
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
        <input type="text" name="user_email">
        <input type="submit" name="submit">
    </form>
</body>

</html>