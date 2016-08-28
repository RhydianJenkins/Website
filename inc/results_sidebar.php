<!-- TODO: text wrap not perfect on long file names -->
<div id="results-side-nav" class="small visible-lg">
	<nav>
		<ul class="nav nav-list">
		
		<?php
		
			$resultsFiles = array_diff(scandir(RESULTS_PATH), array('.', '..'));
			// go through each file and 
			foreach($resultsFiles as $file) {
				$fileName = ucwords(substr(str_replace('_', ' ', $file), 0, strrpos(str_replace('_', ' ', $file), "."))); // make it look pretty
				echo "<li><a href=\"?target=".$file."\">".$fileName."</a></li>";
			}

		?>


			<li><a href="?target=rules">Rules</a></li>
			<li id="back-to-top" style="display: none;"><a href="#top">Back to top</a></li>
		</ul>
	</nav>
</div> 
<!-- Hide the 'back to top' link if not scrolled -->
<script>
	$(window).on("resize scroll", function(e){
		if ($(this).scrollTop() > 1) {
			$('#back-to-top').fadeIn();
		} else {
			$('#back-to-top').fadeOut();
		}
	});
</script>