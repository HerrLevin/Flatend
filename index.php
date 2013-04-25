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
	<link rel="stylesheet" type="text/css" href="./src/css/style.css">
	<link rel="stylesheet" type="text/css" href="./src/css/dynamic.css.php">
	<link rel="stylesheet" type="text/css" href="./src/css/colors.css.php?module=<?php echo $module; ?>">
	<link rel="shortcut icon" href="./src/img/favicon.ico" />
	<meta name="viewport" content="width=1000, maximum-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Merriweather+Sans:300,400" rel="stylesheet" type="text/css">
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="./src/js/dropdown.js"></script>
</head>
<body>
	<div id="header">
		<div class="container">
			<div class="pageTitle"><a href="index.php"><?php echo GetConfig("pageTitle"); ?></a></div>
			<div id="headerMenu">
				<ul>
					<li>
						<a class="userDropdown" href="#"><?php echo GetConfig("dummyUser"); ?></a>
						<ul class="dropdownMenu">
							<div class="userOverview">
								<div class="userPic" style="background-image: url('<?php echo GetRetinaGraphic("./src/img/dummyUser_50x50.png"); ?>');"></div>
								<?php echo GetConfig("dummyUser"); ?><br />
								<span class="role">Administrator</span>
							</div>
							<li onclick="location.href='#'"><img width="16px" height="16px" src="<?php echo GetRetinaGraphic("./src/img/icons/cog_16x16.png"); ?>" />Account</li>
							<li onclick="location.href='#'"><img width="16px" height="16px" src="<?php echo GetRetinaGraphic("./src/img/icons/compass_16x16.png"); ?>" />Hilfe</li>
							<li onclick="location.href='#'"><img width="16px" height="16px" src="<?php echo GetRetinaGraphic("./src/img/icons/arrow_left_alt1_16x16.png"); ?>" />Logout</li>
						</ul>
					</li>
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