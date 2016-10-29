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

<div class="container-fluid">
	<div class="row-fluid show-grid">
		<div class="col-lg-2">
			<!-- Sidebar -->
			<?php include INC_PATH . 'results_sidebar.php'; ?>
		</div>
		<div class="col-lg-10 text-center">
			<!-- Find and include the correct table -->
			<?php
				$fileFound = false;
				
				if (!empty($_GET['year'])) {				
					$results = array_values(array_reverse(array_diff(scandir(RESULTS_PATH.$_GET['year']), array('.', '..')), true));

					foreach($results as $result) {

						$filteredResultName = ucwords(substr(str_replace('_', ' ', $result), 0, strrpos(str_replace('_', ' ', $result), "."))); // make it look pretty
					
						include(RESULTS_PATH . $_GET['year'] . '/' . $result);
						$fileFound = true;

					}
				}
				
				if (!$fileFound) {
					// we didnt find a file to print, go to rules
					include(PAGES_PATH . 'sailing_instructions.page.php');
				}
			?>
		</div>
	</div>
</div>

<!-- Footer -->
<?php include INC_PATH . 'footer.php'; ?>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo JS_PATH . 'bootstrap.min.js' ?>"></script>

<!-- Contact Form JavaScript -->
<script src="<?php echo JS_PATH . 'jqBootstrapValidation.js'?>"></script>
<script src="<?php echo JS_PATH . 'contact_me.js'?>"></script>

</body>
</html>
