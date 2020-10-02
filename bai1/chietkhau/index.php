<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="nhap san pham" name="sanpham">
        <input type="text" placeholder="nhap gia" name="giasanpham">
        <input type="text" placeholder="ty le chiet khau" name="chietkhau">
        <input type="submit" id="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Giasp = $_POST["giasanpham"];
        $Chietkhau = $_POST["chietkhau"];
        $Luongchietkhau = $Giasp * $Chietkhau * 0.1;
        $Giachietkhau = $Giasp * $Chietkhau / 100;
    }
    echo "Luong chiet khau:" . $Luongchietkhau . "<br>";
    echo "Gia sau khi chiet khau:" . $Giachietkhau;
    ?>
</body>

</html>