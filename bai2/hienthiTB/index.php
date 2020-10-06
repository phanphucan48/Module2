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
        <input type="text" name="so" placeholder="input number">
        <input type="submit" value="submit">
    </form>
    <?php
    function Creatarr($size)
    {
        $arr = array();
        for ($i = 0; $i < $size; $i++) {
            $arr[$i] = rand(1, 100);
            echo $arr[$i] . " ";
        }
        return $arr;
    };
    function findvalue($arr, $number)
    {
        if ($number < 0 || $number > 100) {
            throw new Exception("chi so vuot qua gioi han cua chung!");
        }
        for ($i = 0; $i < count($arr); $i++) {
            if ($number == $i) {
                echo "Giá trị của phần tử có chỉ số " . $number . " là " . $arr[$i];
            }
        }
    };
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $size = $_POST["size"];
        $number = $_POST["so"];

        try {
            $arr = creatArr($size);
            findvalue($arr, $number);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    };



    ?>
</body>

</html>