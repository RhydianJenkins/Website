<!DOCTYPE html>
<html>
<?php require("config.php"); ?>
<title><?php echo SITE_NAME; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "w3c.css"; ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "google-fonts-lato.css"; ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo STYLES_PATH . "custom-main.css"; ?>" />
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<ul class="w3-navbar w3-red w3-card-2 w3-top w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="smallScreenNav()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="#home" class="w3-padding-large w3-white">Home</a></li>
  <li class="w3-hide-small"><a href="#gallery" class="w3-padding-large w3-hover-white">Gallery</a></li>
  <li class="w3-hide-small"><a href="#contact" class="w3-padding-large w3-hover-white">Contact Us</a></li>
  <li class="w3-hide-small"><a href="#hours" class="w3-padding-large w3-hover-white">Opening Hours</a></li>
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
<div class="w3-container w3-red w3-center w3-padding-128">
  <h1 class="w3-margin w3-jumbo">START PAGE</h1>
  <p class="w3-xlarge">Template by w3.css</p>
  <button class="w3-btn w3-padding-16 w3-large w3-margin-top">Get Started</button>
</div>

<!-- Content start -->
<?php 
	if (!isset($_GET['page']) && $_GET['page'] == 'gallery') {
		include('pages/gallery.php'); 
	} else {
		include('pages/home.php'); 
	}
?>
<!-- Content end -->

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">
  <div class="w3-xlarge w3-padding-32">
   <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
   <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
   <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
   <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
   <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
 </div>
 <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
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

</body>
</html>

