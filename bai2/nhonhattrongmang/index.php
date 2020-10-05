<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="nhap size">;
        <input type="submit" value="submit"></form>
    <?php
    function CreatArr($size)
    {
        $arr = array();
        for ($i = 0; $i < $size; $i++) {
            $arr[$i] = rand(10, 100);
        }
        return $arr;
    }
    function findMin($arr)
    {
        $min = $arr[0];
        for ($i = 0; $i < count($arr); $i++) {
            if ($min > $arr[$i]) {
                $min = $arr[$i];
            }
        }
        return $min;
    }
    if (isset($_POST["name"])) {
        $size = $_POST["name"];
        $arr = CreatArr($size);
        $min = findMin($arr);
        print_r($arr);
        echo "<br>";
        echo $min;
    }
    ?>
</body>


</html>