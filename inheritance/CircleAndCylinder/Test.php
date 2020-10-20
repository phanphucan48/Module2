<?php
include_once('Circle.php');
include_once('Cylinder.php');
$circle = new Circle(3, "green");
echo "Circle area :" . $circle->calculateArea() . "<br  >";
echo "Circle Perimeter: " . $circle->calculatePerimeter() . "<br>";
echo "Circle color:  " . $circle->getColor() . "<br>";
$cylinder = new Cylinder(5, "red", 6);
echo "Cylinder color :" . $cylinder->getColor() . "<br>";
echo "Cylinder area : " . $cylinder->calculateArea() . "<br>";
echo "Cylinder Perimeter : " . $cylinder->calculatePerimeter();
