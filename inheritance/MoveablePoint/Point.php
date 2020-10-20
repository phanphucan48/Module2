<?php
class Point
{
    public float $x;
    public float $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function setX($x)
    {
        $this->x = $x;
    }
    public function getX()
    {
        return $this->x;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY()
    {
        $XY = [];
        array_push($XY, $this->x);
        array_push($XY, $this->y);
    }
    public function toString()
    {
        return "x :" . $this->x . "<br> " . "y : " . $this->y;
    }
}
