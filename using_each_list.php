<?php
$paper = array("copier" => "copier with",
	 			"inkjet" => "inkjet with",
	 			);

	while(list($item,$description)=each($paper))
		echo "$item:$description <br>";
?>