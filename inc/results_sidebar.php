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
	//echo'<pre>';var_dump($results); die();
?>
<div id="results-side-nav" class="small visible-lg">
	<nav>
		<ul class="nav nav-list">
		
			<?php foreach($results as $year) : ?>
				<li><ul class="nav nav-list">
				<?php foreach($year as $result) : ?>
					<?php $resultName = ucwords(substr(str_replace('_', ' ', $result), 0, strrpos(str_replace('_', ' ', $result), "."))); ?>
					<li><a href="?target=<?= $result ?>"><?= $resultName ?></a></li>
				<?php endforeach ; ?>
				</ul></li>
			<?php endforeach ; ?>

			<li><a href="?target=instructions">Sailing Instructions</a></li>
			<li id="back-to-top" style="display: none;"><a href="#top">Back to top</a></li>
		</ul>
	</nav>
</div> 
<!-- Hide the 'back to top' link if not scrolled -->
<script>
	$(window).on("resize scroll", function(e){
		if ($(this).scrollTop() > 0) {
			$('#back-to-top').fadeIn();
		} else {
			$('#back-to-top').fadeOut();
		}
	});
</script>