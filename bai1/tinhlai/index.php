<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="luong tien ban dau" name="luongtien">
        <input type="text" placeholder="lai suat dau tu" name="laisuat">
        <input type="text" placeholder="so nam dau tu" name="sonam">
        <input type="submit" id="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Tiengoc = $_POST["luongtien"];
        $Laisuat = $_POST["laisuat"];
        $Sonam = $_POST["sonam"];
        $Sum = $Tiengoc + ($Tiengoc * $Laisuat / 100) * $Sonam;
    }
    echo $Sum;



    ?>
</body>

</html>