<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class QuadraticEquation
    {
        function __construct($a, $b, $c)
        {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }
        function getA()
        {
            return $this->a;
        }
        function getB()
        {
            return $this->b;
        }
        function getC()
        {
            return $this->c;
        }
        function getDiscriminant()

        {
            return $this->b * $this->b - 4 * $this->a * $this->c;
        }

        function getRoot1()
        {
            if ($this->getDiscriminant() < 0) {
                return  0;
            }
            $r1 = (-$this->b + pow($this->getDiscriminant(), 0.5)) / 2 * $this->a;
            return $r1;
        }
        function getRoot2()
        {
            if ($this->getDiscriminant() < 0) {
                return  0;
            }
            $r2 = (-$this->b - pow($this->getDiscriminant(), 0.5)) / 2 * $this->a;
            return $r2;
        }
    }

    $a = 3;
    $b = 2;
    $c = 3;

    $phuongTrinh = new QuadraticEquation($a, $b, $c);

    // echo $phuongTrinh->getA();
    // die();
    if ($phuongTrinh->getDiscriminant() > 0) {
        echo "nghiem 1 của phuong trinh là:" . $phuongTrinh->getRoot1();
        echo "<br>";
        echo "nghiem 2 của phuong trinh là:" . $phuongTrinh->getRoot2();
    } elseif ($phuongTrinh->getDiscriminant() == 0) {
        echo " phuong trinh có nghiệm kép là:" . $phuongTrinh->getRoot2();
    } else {
        echo "The equation has no roots";
    }


    ?>
</body>

</html>