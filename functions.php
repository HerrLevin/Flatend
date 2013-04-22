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

?>