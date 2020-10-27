<?php
if (isset($_POST['user_account'])) {
    $tenlop = $_POST['user_account'];
    check($tenlop);
}

function check($str)
{
    $kytu = '/^(C|A|P)+[0-9]{4}+(G|H|I|K|L|M)$/';
    if (preg_match($kytu, $str)) {
        echo "tên lớp hợp lê";
    } else {
        echo "tên lớp ko hợp lệ";
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