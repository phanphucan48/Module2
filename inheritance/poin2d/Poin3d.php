<?php
include_once('Poin2d.php');
class Poin3d extends Poin2d
{
    public float $z;
    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function setZ($z)
    {
        $this->z = $z;
    }
    public function getZ()
    {
        return $this->z;
    }
    public function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    public function getXYZ()
    {
        $XYZ = [];
        array_push($XYZ, $this->x);
        array_push($XYZ, $this->y);
        array_push($XYZ, $this->z);
    }
    public function toString()
    {
        return "x :" . $this->x . "<br> " . "y : " . $this->y . "<br> " . "z :" . $this->z;
    }
}
