<!DOCTYPE html>
<html>
<head>
<?php require("config.php"); ?>
<?php include(SCRIPTS_PATH . "connect.php"); ?>
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
	// check if the user has tried to log in or register
	if (isset($_POST['login'])) {
		$scriptResponse = include(SCRIPTS_PATH . "login_script.php");
		if (is_array($scriptResponse)) {
			// there were errors, and they're listed in $scriptResponse
			var_dump($scriptResponse);
		} else {
			// user has logged in
			header("location: " . ROOT_PATH);
		}
	} else if (isset($_POST['register'])) {
		$scriptResponse = include(SCRIPTS_PATH . "register_script.php");
		if (is_array($scriptResponse)) {
			// there were errors, and they're listed in $scriptResponse
			var_dump($scriptResponse);
		} else {
			// user has logged in
			echo 'Account created, you can now log in';
		}	
	} else {
		// no login / register attempt, show form
		include INC_PATH . 'login.form.php';
	}
?>

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
