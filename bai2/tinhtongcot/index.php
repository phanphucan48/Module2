<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        Nhap chieu rong cua mang:<input type="text" name="width" placeholder="input width">
        Nhap chieu dai cua mang:<input type="text" name="height" placeholder="input height">
        <br>
        Nhap cot muon tinh tong : <input type="text" name="column">


        <input type="submit" value="submit">

    </form>
    <?php
    function creatArr($width, $height)
    {
        $arr = array();
        for ($i = 0; $i < $width; $i++) {
            for ($j = 0; $j < $height; $j++) {
                $arr[$i][$j] = rand(10, 100);
                echo $arr[$i][$j] . " ";
            }
            echo "<br>";
        }
        return $arr;
    }
    function sumColum($arr, $column)
    {
        $sum = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $sum += $arr[$i][$column];
        }
        return $sum;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $width = $_POST["width"];
        $height = $_POST["height"];
        $column = $_POST["column"];
        $arr = creatArr($width, $height);
        print_r($arr);
        echo "<br>";
        echo "tong duong  mot cot mang 2 chieu la :" . sumColum($arr, $column);
    }
    ?>
</body>

</html>