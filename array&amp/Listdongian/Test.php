<?php
include_once('List.php');

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->get(0);
