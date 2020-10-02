<?php
$dictionary = array("hello" => "xin chao", "how" => "the nao", "book" => "quyen sach", "computer" => "may tinh");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($word == $searchword) {
            echo "Tu: " . $word . ".<br/>Nghia cua tu :" . $description;
            echo "<br/>";
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo "khong tim thay tu can tra";
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
<style>
    input [type=text] {
        width: 300px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 4px;
        padding: 12px 10px 12px 10px;
    }

    #submit {
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }
</style>

<body>
    <h1>Tu dien Anh -Viet</h1>
    <form action="" method="post">
        <input type="text" placeholder="nhap tu can tim" name="search">
        <input type="submit" id="submit" value="Tim">
    </form>
</body>

</html>