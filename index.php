<!DOCTYPE html>
<html>
<?php require("config.php"); ?>
<title><?php echo SITE_NAME; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- w3 template css -->
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "w3c.css"; ?>" />

<!-- awesome fonts css -->
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "font-awesome.min.css"; ?>" />

<!-- bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- custom css -->
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "custom-main.css"; ?>" />
<style>

</style>
<body>

<!-- Navbar -->
<ul class="w3-navbar w3-blue w3-card-2 w3-top w3-left-align w3-large">
	<li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
		<a class="w3-padding-large w3-hover-white w3-large w3-blue" href="javascript:void(0);" onclick="smallScreenNav()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
	</li>
	<li><a href="#home" class="w3-padding-large w3-white">Home</a></li>
	<li class="w3-hide-small"><a href="#gallery" class="w3-padding-large w3-hover-white w3-text-black">Gallery</a></li>
	<li class="w3-hide-small"><a href="#contact" class="w3-padding-large w3-hover-white w3-text-black">Contact Us</a></li>
	<li class="w3-hide-small"><a href="#hours" class="w3-padding-large w3-hover-white w3-text-black">Opening Hours</a></li>
</ul>

<!-- Navbar on small screens -->
<div id="idNav" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:51px">
	<ul class="w3-navbar w3-left-align w3-large w3-black">
		<li><a class="w3-padding-large" href="#gallery">Gallery</a></li>
		<li><a class="w3-padding-large" href="#contact">Contact Us</a></li>
		<li><a class="w3-padding-large" href="#hours">Opening Hours</a></li>
	</ul>
</div>

<!-- Header -->
<div class="w3-container bg-img-1 w3-center w3-padding-256">
	<h1 class="w3-margin w3-jumbo">Tata Steel Sailing Club</h1>
	<p class="w3-xlarge">Port Talbot</p>
	<button class="w3-btn w3-padding-16 w3-large w3-margin-top">Book an induction</button>
</div>

<!------------------->
<!-- Content start -->
<!------------------->

<!-- Welcome -->
<div class="w3-container w3-center w3-padding-32">
	<h1>Welcome</h1>
	<p>The club is situated three miles south of Port Talbot, South Wales and was formerly known as the Corus Sailing Club, Margam.</p>
	<p>The reservoir is over one mile long by approximately half a mile wide, where racing takes place every Sunday throughout the whole year (for those brave enough!) and also on Saturdays, Tuesday evenings and Wednesday evenings through the Spring and Summer months.</p>
</div>

<!----------------->
<!-- Content end -->
<!----------------->

<br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br />

<!-- Contact form -->
<?php include(INC_PATH . "contact_form.php"); ?>

<hr />

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-center w3-opacity">
	<div class="w3-xlarge w3-padding-32">
		<a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
		<a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
		<a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
		<a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
		<a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
	</div>
</footer>

<script>
	// Used to toggle the menu on small screens when clicking on the menu button
	function smallScreenNav() {
		var x = document.getElementById("idNav");
		if (x.className.indexOf("w3-show") == -1) {
			x.className += " w3-show";
		} else {
			x.className = x.className.replace(" w3-show", "");
		}
	}
</script>


<!-- jquery -->
<script src="<?php echo JS_PATH . 'jquery.min.js'?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="<?php echo JS_PATH . 'jqBootstrapValidation.js'?>"></script>
<script src="<?php echo JS_PATH . 'contact_me.js'?>"></script>

</body>
</html>

