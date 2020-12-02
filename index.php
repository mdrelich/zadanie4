<!DOCTYPE html>
<?php
require_once 'config.php';
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Progressus - Free business bootstrap template by GetTemplate</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="home">


	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">KALKULATOR KREDYTOWY</h1>
				<p class="tagline">Stworzony przez Maciej Drelich</p>
				<p><a class="btn btn-default btn-lg" role="button" href="https://github.com/mdrelich/zadanie4">AKTUALNY PROJEKT</a> <a href="https://github.com/mdrelich" class="btn btn-action btn-lg" role="button">GITHUB</a></p>
			</div>
		</div>
	</header>
	<!-- /Header -->


	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">
                <?php
                include _ROOT_PATH.'/app/calc.php';
                ?>
            </h3>

		
		</div>
	</div>



	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">


				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-12 widget">
						<div class="widget-body">
							<p class="text-right">
								Stworzone przez <a href="https://github.com/mdrelich/" rel="designer">Maciej Drelich</a>
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>