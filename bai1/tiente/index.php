<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="nhap tien USD" name="sotien">
        <input type="submit" value="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Money = $_POST["sotien"];
        $Tienvn = $Money * 23000;
    }
    echo "Viet Nam =" . $Tienvn . "VND";

    ?>
</body>

</html>