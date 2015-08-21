<?php
$products = array(
	"paper" => array(
			'copy' =>"copier and multipurpose",
			'inkjet'=> "inkjet printer",
			'laser' => "laser Printer",
			'photo' => "photographic")
	"pens" => array(
			'ball' => "ball Point",
			'hilite' => "highlightes",
			'marker' => "markers")
	"misc" => array(
			'tape' => "sticky Tape";
			'gule' => "Adhesive";
			"clips" => "papaerclips";
		)
		) ; 

echo "<pre>";
foreach ($$Printer as $section => $item) {
	foreach ($item as $key => $value) {
		echo "#section:\t $key \t ($value) <br>";
		# code...
	}
	# code...
}
echo "<pre>";

	)
?>