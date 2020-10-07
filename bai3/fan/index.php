<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Fan
    {
        const SLOW = 1;
        const MEDIUm = 2;
        const FAST = 3;
        private $speed;
        private $on;
        private $radius;
        private $color;
        public  function __construct()
        {
            $this->speed = self::SLOW;
            $this->on = false;
            $this->radius = 5;
            $this->color = "blue";
        }
        function setSpeed($speed)
        {
            $this->speed = $speed;
        }
        function setOn($on)
        {
            $this->on = $on;
        }
        function setRadius($radius)
        {
            $this->radius = $radius;
        }
        function setColor($color)
        {
            $this->color = $color;
        }
        function getSpeed()
        {
            return $this->speed;
        }
        function getOn()
        {
            return $this->on;
        }
        function getRadius()
        {
            return $this->radius;
        }
        function getcolor()
        {
            return $this->color;
        }
        function toString()
        {
            if ($this->on) {
                echo "tốc độ :" . $this->speed . "color : " . $this->color . "radius" . $this->radius . "fan is on";
            } else {
                echo  "color : " . $this->color . "radius" . $this->radius . "fan is off";
            }
        }
    }

    $Fan1 = new Fan();
    $Fan1->setOn(true);
    $Fan1->setSpeed(10);
    $Fan1->setRadius(10);
    $Fan1->setColor("yellow");
    $Fan2 = new Fan();
    $Fan2->setOn(false);
    $Fan2->setSpeed(5);
    $Fan2->setRadius(5);
    $Fan2->setColor("blue");
    echo "Fan1:";
    $Fan1->toString();
    echo "<br>";
    echo "Fan2:";
    $Fan2->toString();

    ?>
</body>