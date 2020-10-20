<?php
include_once('MyList.php');
$myList = new MyList();
$myList->add(1);
$myList->add(2);
$myList->add(3);
echo implode("-", $myList->printArray());
