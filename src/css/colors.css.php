<?php
	header("Content-type: text/css");
	$colorsXML = simplexml_load_file("../../colors.xml");
	$menuXML = simplexml_load_file("../../menu.xml");
	$module = $_GET["module"];
	
	foreach($menuXML->entry as $entry) {
		if($entry["module"] == $module) {
			$h1Color = $entry->color;
		}
	}
	
	foreach($colorsXML->color as $color) {
		echo ".bordercolor_".$color["name"]." {\n";
		echo "border-color: ".$color->hex.";\n";
		echo "}\n\n";
		if($h1Color == sprintf($color["name"])) {
			echo "h1, h2 {\n";
			echo "color: ".$color->hex.";\n";
			echo "}\n\n";
		}
	}
?>