<?php
include_once('Point.php');
class MoveablePoint extends Point
{
    public float $xSpeed;
    public float $ySpeed;
    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }
    public function getXSpeed()
    {
        return $this->xSpeed;
    }
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed()
    {
        $XYSpeed = [];
        array_push($XYSpeed, $this->xSpeed);
        array_push($XYSpeed, $this->ySpeed);
        return $XYSpeed;
    }
    public function toString()
    {
        return "x :" . $this->x . "y :" . $this->y . "Speed :" . $this->xSpeed . "" . $this->ySpeed;
    }
    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        echo "x : " . $this->x . "y : " . $this->y;
    }
}
