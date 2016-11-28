<?php
	$years = array_values(array_reverse(array_diff(scandir(RESULTS_PATH), array('.', '..')), true));
?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand page-scroll" href="index.php"><span class="fa fa-home"></span> Tata Steel Sailing</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				
				<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
				<li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
				
				<!-- Results -->
				<li><a href="results.php">Results</a></li>
				<!-- Team Page -->
				<li><a href="team.php">Our Team</a></li>
				<!-- Health and Safety -->
				<li><a href="healthandsafety.php">Health/Safety</a></li>
				<!-- Training -->
				<li><a href="training.php">Training</a></li>
				<!-- Gallery -->
				<li><a href="gallery.php">Gallery</a></li>
				<!-- Calendar -->
				<li><a href="calendar.php">Calendar</a></li>
				<!-- Useful Link -->
				<li><a href="useful-links.php">Useful Links</a></li>
				<!-- About -->
				<li><a href="about.php">About</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container -->
</nav>
<?php /*
<li>
	<a class="dropdown-toggle pointer-hover" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Results <span class="caret"></span>
	</a>
	<ul class="dropdown-menu">
		<!--<li class="dropdown-header">Select a year</li>-->
		<?php foreach($years as $year) : ?>							
			<li><a href="results.php?year=<?= $year ?>"><?= $year ?></a></li>
		<?php endforeach ; ?>
	</ul>
</li>
*/ ?>