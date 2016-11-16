<?php
// Error reporting
//error_reporting(0);	// off, no error reporting

// Start the session
session_start();
 
// Names
define("SITE_NAME", "Tata Steel Sailing Club");

// Paths
define("ROOT_PATH", "./");
//define("ROOT_PATH", "http://".$_SERVER['SERVER_NAME']);
//define("ROOT_PATH", realpath(dirname(__FILE__)) . '/');	// make sure files are readable by the server!
define("STYLES_PATH", ROOT_PATH . "res/css/");
define("JS_PATH", ROOT_PATH . "res/js/");
define("IMGS_PATH", ROOT_PATH . "res/imgs/");
define("INC_PATH", ROOT_PATH . "inc/");
define("SCRIPTS_PATH", ROOT_PATH . "res/php_scripts/");
define("RESULTS_PATH", INC_PATH . "results/");
define("PAGES_PATH", INC_PATH . "pages/");