<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
	  		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><?php echo $title; ?></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<?php
					if($quotes > 0)
					{
					echo "<li><a href=\"#\">Quotes: ".$quotes."</a></li>";
					}
					if($commands > 0)
					{
					echo "<li><a href=\"#\">Commands: ".$commands."</a></li>";
					}
				?>
				<li><a href="https://service.drsclan.net/hmhbot/db.php">Download .db <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a></li>
				<li><a href="https://handmadehero.org" target="_blank">Handmade Hero</a></li>
			</ul>
		</div>
	</div>
</nav>