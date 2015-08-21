<?php
$object = new Tiger();
echo "Tiger have";
echo "<br>";
echo "Fur = True";
echo $object->strigers;

class wildcate
{
	public $fur;
	function _construct()
	{
		$this->fur = "True";
	}
}

/**
* 
*/
class Tiger extends wildcate
{
	
	function __construct(argument)
	{
		# code...
		parent::_construct();
		$this->strigers = "true";
	}
}
?>