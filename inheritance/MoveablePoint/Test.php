<?php
include_once('Point.php');
include_once('MoveablePoint.php');
echo ("---poind----") . "<br>";
$point = new Point(3, 5);
echo $point->toString();
echo ("---Moveablepoind----") . "<br>";
$moveablepoint = new MoveablePoint(3, 5, 6, 7);
echo $moveablepoint->toString() . "<br>";
echo $moveablepoint->move();
