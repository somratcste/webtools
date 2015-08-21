<?php
/**
* 
*/
class User
{
	public $name; 
	
}
$object = new User ;
$object->name = "alice";
$object1 = $object;
$object1->name = "Army";

echo $object->name . "<br>" ;
print_r($object1);

?> 