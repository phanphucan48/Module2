<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="size" placeholder="input size">
        <input type="submit" value="submit">
    </form>
    <?php
    function creatArr($size)
    {
        $arr = array();
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                $arr[$i][$j] = rand(10, 100);
            }
        }
        return $arr;
    }
    function SumMatrix($arr)
    {
        $Sum = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $Sum += $arr[$i][$i];
        }
        return $Sum;
    }
    if (isset($_POST["size"])) {
        $size = $_POST["size"];
        $arr = creatArr($size);
        print_r($arr);
        echo "<br>";
        echo "tong so cac duong cheo chinh ma tran la:" . SumMatrix($arr);
    }
    ?>
</body>

</html>