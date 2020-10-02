<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contáctanos - Nacemi</title>
	<?php require_once "menu.php"; ?>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">

	<!-- jS -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>


</head>
<body>

<!-- breadcrumb Start
    ================================================== -->

	<section id="topic-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1>Contáctanos</h1>
					<p>Consultas - Pedidos</p>
				</div>	<!-- /.col-md-4 -->
				<div class="col-md-8 hidden-xs">
					<ol class="breadcrumb pull-right">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li class="active">Contáctanos</li>
					</ol>
				</div> <!-- /.col-md-8 -->
			</div>	<!-- /.row -->
		</div>	<!-- /.container-->
	</section><!-- /Section -->

<!-- Notice
    ================================================== -->

    <div class="container">
    	<div class="row">
    		<div class="col-md-8 text">
    			<div class="leave-comment" style="margin-top: 80px; margin-bottom: 80px;">
    				<h5>Envíanos un email</h5>
    				<form class="form-horizontal" role="form">
    					<div class="form-group">
    						<label for="inputname" class="col-sm-2 control-label">Nombre</label>
    						<div class="col-sm-10">
    							<input type="text" class="form-control" id="inputname" placeholder="Nombre">
    						</div>
    					</div>	<!-- End of /.form-group -->
    					<div class="form-group">
    						<label for="inputEmail" class="col-sm-2 control-label">Email</label>
    						<div class="col-sm-10">
    							<input type="email" class="form-control" id="inputEmail" placeholder="Email">
    						</div>
    					</div>	<!-- End of /.form-group -->
    					<div class="form-group">
    						<label for="inputmessage" class="col-sm-2 control-label">Descripción</label>
    						<div class="col-sm-10">
    							<textarea class="form-control" id="inputmessage"  rows="3"></textarea>
    						</div>
    					</div>	<!-- End of /.form-group -->

    					<div class="form-group">
    						<div class="col-sm-offset-2 col-sm-3" style="margin-left: 0px;">
    							<button type="submit" class="btn btn-primary">Enviar</button>
    						</div>
    					</div>	<!-- End of /.form-group -->
    				</form>	<!-- End of /.form-horizontal -->
    			</div>	<!-- End of /.leave comments -->
    		</div>
    	</div>
    </div>

	<?php require_once "footer.php"; ?>
</body>
</html>