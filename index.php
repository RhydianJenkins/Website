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
<ul class="w3-navbar w3-light-blue w3-card-2 w3-top w3-left-align w3-large">
	<li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
		<a class="w3-padding-large w3-hover-white w3-large w3-light-blue" href="javascript:void(0);" onclick="smallScreenNav()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
	</li>
	<li><a href="#home" class="w3-padding-large w3-white">Home</a></li>
	<li class="w3-hide-small"><a href="#" class="w3-padding-large w3-hover-white w3-text-black">Gallery</a></li>
	<li class="w3-hide-small"><a href="#contact" class="w3-padding-large w3-hover-white w3-text-black">Contact Us</a></li>
	<li class="w3-hide-small"><a href="#" class="w3-padding-large w3-hover-white w3-text-black">Opening Hours</a></li>
</div>
</ul>

<!-- Navbar on small screens -->
<div id="idNav" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:51px">
	<ul class="w3-navbar w3-left-align w3-large w3-light-grey">
		<li><a class="w3-padding-large w3-text-black" href="#">Gallery</a></li>
		<li><a class="w3-padding-large w3-text-black" href="#contact">Contact Us</a></li>
		<li><a class="w3-padding-large w3-text-black" href="#">Opening Hours</a></li>
	</ul>
</div>

<!-- Header -->
<div class="w3-container bg-img-1 w3-center w3-padding-256">
	<h1 class="w3-margin w3-jumbo w3-animate-opacity">Tata Steel Sailing Club</h1>
	<p class="w3-xlarge w3-animate-opacity">Port Talbot</p>
	<button class="w3-btn w3-padding-16 w3-large w3-margin-top w3-animate-opacity">Book an induction</button>
</div>

<!----------------------------------------------------------------------------------------------->
<!---------------------------------------- Content start ---------------------------------------->
<!----------------------------------------------------------------------------------------------->

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
	<div class="w3-content">
		<div class="w3-twothird">
			<h1>Welcome</h1>
			<p class="w3-padding-16">The club is situated three miles south of Port Talbot, South Wales and was formerly known as the Corus Sailing Club, Margam.</p>

			<p class="w3-padding-16">The reservoir is over one mile long by approximately half a mile wide, where racing takes place every Sunday throughout the whole year (for those brave enough!) and also on Saturdays, Tuesday evenings and Wednesday evenings through the Spring and Summer months.</p>
		</div>

		<div class="w3-third w3-center">
			<img style="width: 300px; height: 300px;" src="http://assets.sbnation.com/assets/3149491/TSS_036_FastBoat_Segment_A.Still006.jpg" />
		</div>
	</div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
	<div class="w3-content">
		<div class="w3-third w3-center">
			<?php include(SCRIPTS_PATH . "map.html"); ?> <!-- TODO: style this properly on small screens -->
		</div>
		<div class="w3-twothird">
			<h1>Location</h1>
			<address>
				<strong>Tata Steel Sailing Club</strong><br />
				Eglwys Nunydd Reservoir<br />
				Off Longlands Lane<br /> <!-- TODO: is this the real address? -->
				Margam<br />
				Port Talbot<br />
				SA13 2NS<br />
			</address>
			<p class="w3-padding-16">Tata Steel Sailing Club is located just off Junction 38 of the M4. If traveling from the East, i.e. traveling from the Cardiff direction take the first exit off the J38 roundabout. If traveling from the West, i.e. traveling, from the Swansea direction take the 3rd exit off the J38 roundabout.</p>
		</div>
	</div>
</div>

<!--------------------------------------------------------------------------------------------->
<!---------------------------------------- Content end ---------------------------------------->
<!--------------------------------------------------------------------------------------------->

<!-- Contact form -->
<?php include(INC_PATH . "contact_form.php"); ?>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-center w3-opacity">
	<div class="w3-xlarge w3-padding-32">
		<a href="https://www.facebook.com/Tata-Steel-Sailing-Club-235212319849859/" target="blank" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
		<a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
		<a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
		<a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
		<a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
	</div>
</footer>

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
