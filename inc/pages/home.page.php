<!-- Blurred bg body -->
<div id="fullImageBackground"></div>
<div id="fullImageBackground-blur" style="opacity: 0;"></div>

<!-- Welcome Header -->
<div class="container-fluid text-center padding-256" style="height: 960px;">
	<h1 id="main-header" class="w3-animate-opacity">Tata Steel Sailing Club</h1>
	<p id="second-header" class="w3-xlarge w3-animate-opacity">Port Talbot</p>
</div>

<!-- Welcome -->
<div class="container-fluid" style="background-color: rgba(240, 240, 240, 1); min-height: 400px;">
	<div class="container padding-20">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="page-header">Welcome</h1>
				<p>The club is situated three miles south of Port Talbot, South Wales and was formerly known as the Corus Sailing Club, Margam.</p>
				<p>The reservoir is over one mile long by approximately half a mile wide, where racing takes place every Sunday throughout the whole year (for those brave enough!) and also on Saturdays, Tuesday evenings and Wednesday evenings through the Spring and Summer months.</p>
			</div>

			<div class="col-sm-4 text-center">
				<img style="overflow: hidden; height: 300px; width: 300px;" src="<?php echo IMGS_PATH . 'boats1.jpg'; ?>" />
			</div>
		</div>
	</div>
</div>

<!-- Location -->
<div class="container-fluid" style="height: 400px; padding-left: 0; padding-right: 0;">
	<?php include(INC_PATH . "map.html"); ?>
</div>

<!-- FAQ -->
<div class="container-fluid" style="background-color: rgba(0, 0, 0, 0.5); min-height: 400px;">
	<div class="container padding-20">
		<div class="row">
			<div class="col-sm-12">
				<?php include INC_PATH . 'faq.php'; ?>
			</div>
		</div>
	</div>
</div>

<!-- Facebook feed -->
<div class="container-fluid" style="background-color: rgba(240, 240, 240, 1); height: 400px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<h1 class="page-header">Facebook feed (TODO)</h1>
			</div>
		</div>
	</div>
</div>

<!-- Blur bg image on scroll -->
<script>
$(window).scroll(function() {
    var s = $(window).scrollTop();
    var opacityVal = (s / 300.0);
    $('#fullImageBackground-blur').css('opacity', opacityVal);
});
</script>