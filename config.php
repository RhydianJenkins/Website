<?php
ini_set('display_errors', -1);
if (!isset($_SESSION)) {
	echo 'session start';
	session_start();
}

// Names
define("SITE_NAME", "Tata Steel Sailing Club");

// Paths
define("ROOT_PATH", "./");
define("STYLES_PATH", ROOT_PATH . "res/css/");
define("JS_PATH", ROOT_PATH . "res/js/");
define("IMGS_PATH", ROOT_PATH . "res/imgs/");
define("INC_PATH", ROOT_PATH . "inc/");
define("SCRIPTS_PATH", ROOT_PATH . "res/php_scripts/");
define("RESULTS_PATH", INC_PATH . "results/");