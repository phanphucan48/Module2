<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Calculation
    {
        function calc($x, $y)
        {

            if ($y == 0 || $x == 0 && $y == 0) {
                throw new Exception("Devided by zero!");
            } else {

                echo "Tong : " . $x . " + " . $y . " = " . ($x + $y) . "<br>";


                echo "Hieu : " . $x . " - " . $y . " = " . ($x - $y) . "<br>";


                echo "Tich : " . $x . " x " . $y . " = " . ($x * $y) . "<br>";


                echo "Thuong : " . $x . " / " . $y . " = " . ($x / $y) . "<br>";
            }
        }
    }
    try {
        $mayTinh = new Calculation;
        $mayTinh->calc(0, 4);
    } catch (Exception $e) {
        echo "Loi :" . $e->getMessage();
    }

    ?>
</body>

</html>