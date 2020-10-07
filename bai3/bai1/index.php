<?php
class Person {
 var $name;
 function setName($new_name){
     $this->name = $new_name;
 }
 function getName($new_name){
     return $this->name;
 }
}
