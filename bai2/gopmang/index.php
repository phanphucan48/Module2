<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arr1 = array(1, 2, 3, 4, 5);
    $arr2 = array(6, 7, 8, 9, 10);
    function gopMang($arr1, $arr2)
    {
        $arr3 = array();
        for ($i = 0; $i < count($arr1); $i++) {
            array_push($arr3, $arr1[$i]);
        }
        for ($i = 0; $i < count($arr2); $i++) {
            array_push($arr3, $arr2[$i]);
        }
        return $arr3;
    }
    $arr3 = gopMang($arr1, $arr2);
    print_r($arr3);

    ?>
</body>

</html>