
<?php require_once "dependencias.php" ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/javascript" src="js/jquery.nicescroll.js">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link type="text/javascript" href="http://code.jquery.com/jquery-latest.js">
	<link type="text/javascript" src="js/scrool.js">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/icons/favicon.ico">
</head>
<body>

	
	<section id="top" class="top"> 

	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="index.php">
						<img src="img/logo.png" alt="logo">
					</a>
				</div>
			</div>
		</div>	
	</header>

	<nav class="navbar navbar-default" id="nav"  class="responsive" data-toggle="sticky-onscroll">
		<div class="container">

		    <!--   class="active"   -->

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav nav-main">
		      		<li class="dropdown" class="active">
						<a href="index">INICIO</a>
					</li>
					<li class="dropdown" class="active"><a href="nutricion">NUTRICIÓN</a></li>
					<li class="dropdown" class="active"><a href="menu_de_hoy">EL MENÚ DE HOY</a></li>	
					<li class="dropdown" class="active">
						<a href="#">
							CATEGORÍAS
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" class="active">
						   <li><a  href="desayuno">Desayuno</a></li>
						    <li><a  href="almuerzo">Almuerzo</a></li>
						    <li><a  href="cena">Cena</a></li>
						</ul>
					</li>

					<li class="dropdown" class="active">
						<a href="#">
							SERVICIOS
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a  href="catering">Catering</a></li>
							<li class="dropdown">
								<a href="">
									Para eventos
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a  href="escolares">Escolares</a></li>
									<li><a  href="dias-festivos">Dias festivos</a></li>
									<li><a  href="bodas">Bodas</a></li>
									<li><a  href="happybirthday">Cumpleaños</a></li>
									<li><a  href="baby-shower">Baby shower</a></li>
								</ul>
							</li>					    
						</ul>
					</li>
					<li class="dropdown" class="active"><a href="contactanos">CONTÁCTANOS</a></li>					
		        </ul> 
		    </div>
		</div>	
	</nav>
</body>
</html>