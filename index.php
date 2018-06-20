<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $lang['title']; ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		.footer{
			left: 0;
			position: fixed;
			text-align: center;
			color: white;
			bottom: 0;
			width: 100%;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	    <ul class="navbar-nav">
	        <li class="nav-item">
	        <a class="nav-link active" href="#"><?php echo $lang['home']; ?></a>
	        </li><!--
	     --><li class="nav-item">
	     <a class="nav-link"href="#"><?php echo $lang['pricing']; ?></a>
	     </li><!--
	     --><li class="nav-item">
	     	<a class="nav-link"href="#"><?php echo $lang['contact']; ?></a>
	     </li>
	    </ul>
	</nav>
	<div class="container" style="margin-top: 100px;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-4 text-center">
				<h1><?php echo $lang['heading']; ?></h1>
				<p>
					<?php echo $lang['description']; ?>
				</p>
			</div>
		</div>
	</div>
	<div class="footer bg-dark">
		Engish | German
	</div>
</body>
</html>