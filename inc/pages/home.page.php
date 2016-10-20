<!-- Welcome Header -->
<div class="container-fluid bg-img-1 w3-center w3-padding-256">
	<h1 id="main-header" class="w3-animate-opacity">Tata Steel Sailing Club</h1>
	<p class="w3-xlarge w3-animate-opacity">Port Talbot</p>
</div>

<!-- Welcome -->
<div class="container-fluid">
	<div class="container" style="padding: 10px;">
		<div class="row">
			<div class="col-lg-8">
				<h1>Welcome</h1>
				<p class="w3-padding-16">The club is situated three miles south of Port Talbot, South Wales and was formerly known as the Corus Sailing Club, Margam.</p>

				<p class="w3-padding-16">The reservoir is over one mile long by approximately half a mile wide, where racing takes place every Sunday throughout the whole year (for those brave enough!) and also on Saturdays, Tuesday evenings and Wednesday evenings through the Spring and Summer months.</p>
			</div>

			<div class="col-lg-4">
				<img style="overflow: hidden; height: 300px; width: 300px;" src="<?php echo IMGS_PATH . 'boats1.jpg'; ?>" />
			</div>
		</div>
	</div>
</div>

<!-- Location -->
<div class="container-fluid" style="background-color: rgb(240, 240, 240);">
	<div class="container" style="padding: 10px;">
		<div class="row p-16">
			<div class="col-lg-4">
				<?php include(INC_PATH . "map.html"); ?> <!-- TODO: style this properly on smaller screens -->
			</div>
			<div class="col-lg-8">
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
</div>

<!-- FAQ -->
<div class="w3-row-padding w3-padding-64 container-fluid">
	<div class="w3-content">
		<?php include INC_PATH . 'faq.php'; ?>
	</div>
</div>