<!-- Blurred bg body -->
<div id="fullImageBackground"></div>
<div id="fullImageBackground-blur" style="opacity: 0;"></div>

<!-- Welcome Header -->
<div class="container-fluid text-center padding-256" style="height: 960px;">
	<h1 id="main-header" class="w3-animate-opacity">Tata Steel Sailing Club</h1>
	<p id="second-header" class="w3-xlarge w3-animate-opacity">Port Talbot</p>
</div>

<!-- Welcome -->
<div class="container-fluid" style="background-color: rgba(240, 240, 240, 1); min-height: 500px;">
	<div class="container padding-20">
		<div class="row">
			<div class="col-sm-8">
				<h1>Welcome</h1>
				<p class="w3-padding-16">The club is situated three miles south of Port Talbot, South Wales and was formerly known as the Corus Sailing Club, Margam.</p>

				<p class="w3-padding-16">The reservoir is over one mile long by approximately half a mile wide, where racing takes place every Sunday throughout the whole year (for those brave enough!) and also on Saturdays, Tuesday evenings and Wednesday evenings through the Spring and Summer months.</p>
			</div>

			<div class="col-sm-4 text-center">
				<img style="overflow: hidden; height: 300px; width: 300px;" src="<?php echo IMGS_PATH . 'boats1.jpg'; ?>" />
			</div>
		</div>
	</div>
</div>

<!-- Location -->
<div class="container-fluid" style="height: 500px; padding-left: 0; padding-right: 0;">
	<?php include(INC_PATH . "map.html"); ?>
</div>

<!-- FAQ -->
<div class="container-fluid" style="background-color: rgba(240, 240, 240, 1); min-height: 500px;">
	<div class="container padding-20">
		<div class="row">
			<div class="col-sm-12">
				<div class="w3-content">
					<?php include INC_PATH . 'faq.php'; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Empty gap -->
<div class="container-fluid" style="height: 500px;"></div>

<!-- Unused! (TODO) -->
<div class="container-fluid" style="background-color: rgba(240, 240, 240, 1); height: 500px;"></div>

<!-- Blur bg image on scroll -->
<script>
$(window).scroll(function() {
    // Get scroll position
    var s = $(window).scrollTop(),
    // scroll value and opacity
    opacityVal = (s / 400.0);
    // opacity value 0% to 100%
    $('#fullImageBackground-blur').css('opacity', opacityVal);
});
</script>