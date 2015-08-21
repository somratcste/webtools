<?php
class Dad
{
	function test()
	{
		echo 'I am your father';
	}
}
class Son extends Dad
{
	function test()
	{
		echo "I am luke";
	}

	function test2()
	{
		parent::test();
	}
}
?>