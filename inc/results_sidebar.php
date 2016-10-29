<?php
	// TODO: text wrap not perfect on long file names 

	$years = array_diff(scandir(RESULTS_PATH), array('.', '..'));
	foreach($years as $year) {
		$allFiles = scandir(RESULTS_PATH.'/'.$year);
		$filteredFiles = array_diff($allFiles, array('.', '..'));
		$filteredFiles = array_values($filteredFiles);
		$results[$year] = $filteredFiles;
	}
	
	$results = array_reverse($results, true);
?>
<div id="results-side-nav" class="small visible-lg">
	<nav>
		<ul class="nav nav-list">
			<?php if (empty($_GET['year'])) : ?>
				<?php foreach($results as $year => $files) : ?>
					<li>
						<h4 id="results-year" style="padding-left: 10px;"><?= $year ?></h4>
						<ul class="nav nav-list">
							<?php foreach($files as $file) : ?>
								<?php
									$fileName = ucwords(substr(str_replace('_', ' ', $file), 0, strrpos(str_replace('_', ' ', $file), ".")));
								?>
								<li><a href="?target=<?= $file ?>"><?= $fileName ?></a></li>
							<?php endforeach ; ?>
						</ul>
					</li>
				<?php endforeach ; ?>
			<?php else : ?>
				
			<?php endif ; ?>

			<li id="back-to-top-divider" role="separator" class="divider"><hr /></li>
			<li id="back-to-top" style="display: none;"><a href="#top">Back to top</a></li>
		</ul>
	</nav>
</div> 
<!-- Hide the 'back to top' link if not scrolled -->
<script>
	$(window).on("resize scroll", function(e){
		if ($(this).scrollTop() > 0) {
			$('#back-to-top').fadeIn();
			$('#back-to-top-divider').fadeIn();
		} else {
			$('#back-to-top').fadeOut();
			$('#back-to-top-divider').fadeOut();
		}
	});
</script>