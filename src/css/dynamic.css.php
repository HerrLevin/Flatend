<?php
	header("Content-type: text/css");
	require("../../functions.php");
?>
.userDropdown:before {
	content: '';
	background-image: url('<?php echo GetRetinaGraphic("../img/userDropdown_12x24.png"); ?>');
	background-size: 12px 24px;
	background-position: 0px 0px;
	width: 12px;
	height: 11px;
	float: left;
	margin-top: 3px;
	margin-right: 10px;
}

.userDropdown:hover:before {
	background-position: 0px 12px;
}