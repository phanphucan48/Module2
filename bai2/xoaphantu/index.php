<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text " name="x" placeholder="nhap so">
        <input type="submit" value="submit">


    </form>
    <?php
    $arr = array(1, 2, 3, 4, 5, 6, 7);
    print_r($arr);
    echo "<br>";
    function clearArr($arr, $x)
    {
        for ($i = 0; $i < count($arr); $i++) {
            if ($x == $arr[$i]) {
                array_splice($arr, $i, 1);
                array_push($arr, 0);
                $i--;
            }
        }
        return $arr;
    };
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["x"];
        print_r(clearArr($arr, $x));
    }
    ?>
</body>

</html>