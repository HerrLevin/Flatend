<!DOCTYPE html>
<?php
	$menuXML = simplexml_load_file("menu.xml");
	$configXML = simplexml_load_file("config.xml");
	$module = $_GET["module"];
	if(empty($module)) {
		$module = sprintf($menuXML->entry["module"]);
	}
	require("functions.php");
	$menuColor = GetActiveColor();
?>
<html lang="de">
<head>
	<title><?php echo GetConfig("pageTitle"); ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<link rel="stylesheet" type="text/css" href="./src/style.css">
	<link rel="stylesheet" type="text/css" href="./src/colors.css.php?module=<?php echo $module; ?>">
	<style>
		h1 {
		}
	</style>
	<link rel="shortcut icon" href="./src/img/favicon.ico" />
	<meta name="viewport" content="width=1000, maximum-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Merriweather+Sans:300,400" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="header">
		<div class="container">
			<div class="pageTitle"><a href="index.php"><?php echo GetConfig("pageTitle"); ?></a></div>
			<div id="headerMenu">
				<ul>
					<li><a href="#" class="userDropdown"><?php echo GetConfig("dummyUser"); ?></a></li>
					<li><a href="#">Frontend</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="menu" class="bordercolor_<?php echo $menuColor; ?>">
		<div class="container">
			<div class="menuContainer">
				<ul>
					<div class="menuDivider"></div>
					<?php
						Listmenu();
					?>
				</ul>
			</div>
		</div>
	</div>
	<div id="content">
		<div class="container">
			<?php
				if(ModuleExists($module) == true) {
					require("./modules/".$module.".php");
				} else {
					echo "<h1 class=\"h1\">Modul nicht gefunden!</h1><h3><a href=\"javascript:history.back();\">Zur&uuml;ck &raquo;</a></h3>";
				}
			?>
		</div>
	</div>
</body>
</html>