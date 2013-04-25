<?php

	function ModuleExists($module) {
		if(file_exists("./modules/".$module.".php")) {
				return true;
			} else {
				return false;
			}
	}
	
	function GetConfig($property) {
		global $configXML;
		return $configXML->$property;
	}
	
	function ActiveMenu($menuEntry) {
		global $module;
		global $menuXML;
		if($menuEntry == $module) {
			return ' active';
		}
	}
	
	function Listmenu() {
		$xml = simplexml_load_file('menu.xml');
		foreach($xml->entry as $entry) {
			echo '<li class="menuli bordercolor_'.$entry->color.ActiveMenu($entry["module"]).'" onclick="location.href=\'index.php?module='.$entry["module"].'\'">'.$entry->name.'</li>';
			echo '<div class="menuDivider"></div>';
		}
	}
	
	function GetActiveColor() {
		global $module;
		global $menuXML;
		foreach($menuXML->entry as $entryModule) {
			if(sprintf($entryModule["module"]) == $module) {
				return $entryModule->color;
			}
		}
	}
	
	function DetectRetina() {
		if(isset($_COOKIE["retina"])) {
			$ratio = $_COOKIE["retina"];
			if($ratio >= 2) {
				$retina = true;
			}
		} else {
			?>
			<script type="text/javascript">
			var retina = 'retina='+ window.devicePixelRatio +';'+ retina;
			document.cookie = retina;
			document.location.reload(true);
			</script>
			<?php
		}
		return $retina;
	}
	
	function GetRetinaGraphic($path) {
		$isRetina = DetectRetina();
		if($isRetina == true) {
			$array = explode("_", $path);
			$size = array_pop($array);
			$sizeArray = explode(".", $size);
			$sizeNum = array_shift($sizeArray);
			$sizeNum = explode("x", $sizeNum);
			$sizeNum1 = array_shift($sizeNum);
			$sizeNum2 = array_shift($sizeNum);
			$retinaSize1 = $sizeNum1 * 2;
			$retinaSize2 = $sizeNum2 * 2;
			$array = implode("_", $array);
			$newPath = $array."_".$retinaSize1."x".$retinaSize2.".".array_pop($sizeArray);
			if(is_file($newPath)) {
				$path = $newPath;
			}
		}
		return $path;
	}

?>