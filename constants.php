<?php
class Translate
{
	const English = 0 ;
	const Spanish = 1;
	const French = 2;
	const German = 3;

	static function lookup()
	{
		echo self::Spanish;
	}
}
Translate::lookup();
?>