<?php
include_once('Poin2d.php');
include_once('Poin3d.php');
echo ("---poind2d----") . "<br>";
$poin2d = new Poin2d(2, 3);
echo $poin2d->toString() . "<br>";
echo ("---poind3d----") . "<br>";
$poin3d = new Poin3d(2, 3, 5);
echo $poin3d->toString();
