<!-- Blurred bg body -->
<div id="fullImageBackground"></div>
<div id="fullImageBackground-blur" style="opacity: 0;"></div>

<!-- Welcome Header -->
<div id="welcome-div" class="container-fluid text-center padding-0">
    <div id="header-text-wrapper">
        <h1 id="main-header" class="w3-animate-opacity">Tata Steel Sailing Club</h1>
        <p id="second-header" class="w3-animate-opacity">Port Talbot</p>
		<a class="arrow-wrap smoothScroll" href="#anchor"><span class="arrow"></span></a>
    </div>
</div>

<!-- Page start anchor -->
<div id="anchor"></div>

<!-- Empty -->
<div id="first-content" class="container-fluid border-top-3" style="background-color: rgba(255, 255, 255, 1); min-height: 400px">
	<div class="container padding-20">
		<div class="row">
			<div class="col-lg-6">
				<h1 class="page-header">Sailing</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-lg-6">
				<h1 class="page-header">Windsurfing</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
</div>

<!-- Carousel -->
<div class="container-fluid border-top-3" style="height: 800px; padding-left: 0; padding-right: 0;">
	<?php include INC_PATH . 'carousel.php'; ?>
</div>

<!-- News -->
<div id="first-content" class="container-fluid border-top-3" style="background-color: rgba(255, 255, 255, 1); min-height: 400px">
	<div class="container padding-20">
		<h1 class="page-header">News</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>

<!-- Location -->
<div class="container-fluid border-top-3" style="height: 800px; padding-left: 0; padding-right: 0;">
	<?php include(INC_PATH . "map.html"); ?>
</div>

<!-- FAQ -->
<div class="container-fluid border-top-3" style="background-color: rgba(0, 0, 0, 0.6); min-height: 400px;">
	<div class="container padding-20">
		<?php include INC_PATH . 'faq.php'; ?>
	</div>
</div>

<!-- Facebook feed -->
<div class="container-fluid border-top-3" style="background-color: rgb(255, 255, 255); min-height: 400px;">
	<div class="container">
		<?php include INC_PATH . 'facebook.php'; ?>
	</div>
</div>

<!-- Blur bg image and scroll arrow opacity on scroll -->
<script>
$(window).scroll(function() {
    var s = $(window).scrollTop();
    var opacityVal = (s / 600.0);
    $('#fullImageBackground-blur').css('opacity', opacityVal);
	$('.arrow-wrap').css('opacity', 1 - opacityVal);
});
</script>

<!-- Smooth scrolling -->
<script src="<?= JS_PATH . 'smoothscroll.js'; ?>"></script>