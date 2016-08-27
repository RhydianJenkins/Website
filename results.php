<!DOCTYPE html>
<html>
<head>
<?php require("config.php"); ?>
<title><?php echo SITE_NAME; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- w3 template css -->
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "w3c.css"; ?>" />
<!-- awesome fonts css -->
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "font-awesome.min.css"; ?>" />
<!-- bootstrap 3.3.7 css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- custom css -->
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "custom-main.css"; ?>" />
<!-- jQuery -->
<script src="<?php echo JS_PATH . 'jquery.min.js'?>"></script>
</head>
<body>

<!-- Navbar -->
<?php include INC_PATH . 'bootstrap_navbar.php'; ?>

<?php
	// grab all files in results path bar '.' and '..'
	$resultsFiles = array_diff(scandir(RESULTS_PATH), array('.', '..'));
	$fileFound = false;
	
	// go through each file and 
	foreach($resultsFiles as $file) {
		if ($file == $_GET['target']) {
			include(RESULTS_PATH . $file);
			$fileFound = true;
		}
	}
	if (!$fileFound) {
		// we didnt find a file to print, go to rules
		include(INC_PATH . 'rules.php');
	}
?>

<!-- Footer -->
<?php include INC_PATH . 'footer.php'; ?>

<!-- Small screen nav menu -->
<script>
	function smallScreenNav() {
		var x = document.getElementById("idNav");
		if (x.className.indexOf("w3-show") == -1) {
			x.className += " w3-show";
		} else {
			x.className = x.className.replace(" w3-show", "");
		}
	}
</script>

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="<?php echo JS_PATH . 'jqBootstrapValidation.js'?>"></script>
<script src="<?php echo JS_PATH . 'contact_me.js'?>"></script>

</body>
</html>
