<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand page-scroll" href="index.php">Tata Steel Sailing</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
				<li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
				<!-- Results -->
				<li>
					<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Results <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<?php
							$resultsFiles = array_diff(scandir(RESULTS_PATH), array('.', '..'));
							// go through each resultsFile and create a UL to it
							foreach($resultsFiles as $file) {
								$fileName = ucwords(substr(str_replace('_', ' ', $file), 0, strrpos(str_replace('_', ' ', $file), "."))); // make it look pretty
								
								echo "<li><a href=\"results.php?target=".$file."\">".$fileName."</a></li>";
							}
						?>
						<li role="separator" class="divider"></li>
						<li><a href="results.php?target=rules">Rules</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container -->
</nav>