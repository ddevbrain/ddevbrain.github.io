<?php
setcookie("nacemicookie", "cookie create", time()+3600);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NACEMI</title>
	<?php require_once "menu.php"; ?>
	<?php require_once "dependence.php"?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166762944-1"></script>
    <script>
    	window.dataLayer = window.dataLayer || [];
    	function gtag(){dataLayer.push(arguments);}
    	gtag('js', new Date());

    	gtag('config', 'UA-166762944-1');
    </script>
</head>
<body>
	<section id="topic-header" style="padding-bottom: 30px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>[SIÉNTETE COMO EN CASA]</h1>
				</div>	

			</div>	
		</div>	
	</section>

	<div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/categories/asar-shish-kebab-costra-brochetas_23-2148253397.jpg" style="width:100%; height: 100%;">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="img/categories/fondo-salpicadura-zumo-naranja_1355-76.jpg"  style="width:100%; height: 100%;">
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
        <img src="img/categories/filete-pescado_1339-930.jpg"  style="width:100%; height: 100%;">
        <div class="carousel-caption">
        </div>
      </div>
  
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Antes</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
</div>

	<main class="container">
		<div class="row nosotros justify-content-center">
			<div class="col-12 text-center">
				<div class="block-heading">
					<h2><span>¿Quiénes somos?</span></h2>
				</div>
				<h3 class="titulo">Nuestros platillos son exquisitos y saludables</h3>
				<p>
					Nacemi nace con el propósito de brindarte el mejor servicio y calidad en tus alimentos. Tu salud es importante para nosotros. Ven y prueba la especialidad de la casa, tu paladar te pedirá más.
				</p>
				<a href="platillo-favorito.php"  class="enlace">¡Descubre tu próximo platillo favorito!</a>
			</div>
		</div>
	</main>

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class="fa fa-ambulance"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">A un buen precio</h4>
						    	<p>Lorem ipsum dolor sit amet, consectetur.</p>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
								<i class=" fa fa-foursquare"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Un buen sabor</h4>
						    	<p>Lorem ipsum dolor sit amet, consectetur.</p>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="block">
						<div class="media">
							<div class="pull-left" href="#">
						    	<i class=" fa fa-phone"></i>
						  	</div>
						  	<div class="media-body">
						    	<h4 class="media-heading">Calidad en el servicio</h4>
						    	<p>Lorem ipsum dolor sit amet, consectetur.</p>
						  </div>	
						</div>	
					</div>	
				</div> 
			</div>	
		</div>
	</section>	

	<section id="catagorie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>CATEGORÍAS</h2>
						</div>	
						<div class="row">
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="desayuno.php">
										<img src="img/display/img-01.jpg" alt="...">
										<h3>Desayuno</h3>
									</a>
							      	<div class="caption">
							        	<p></p>
							        	<p>
							        		<a href="desayuno.php" class="btn btn-default btn-transparent" role="button">
							        			<span>Saber más</span>
							        		</a>
							        	</p>
							      	</div>	
							    </div>	
						  	</div>	
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="almuerzo.php">
										<img src="img/display/img-02.jpg" alt="...">
										<h3>Almuerzo</h3>
									</a>
							      	<div class="caption">
							        	<p></p>
							        	<p>
							        		<a href="almuerzo.php" class="btn btn-default btn-transparent" role="button">
							        			<span>Saber más</span>
							        		</a>
							        	</p>
							      	</div>	
							    </div>	
						  	</div>
						  	<div class="col-sm-6 col-md-4">
							    <div class="thumbnail">
							    	<a class="catagotie-head" href="cena.php">
										<img src="img/display/img-03.jpg" alt="...">
										<h3>Cena</h3>
									</a>
							      	<div class="caption">
								        <p></p>
								        <p>
								        	<a href="cena.php" class="btn btn-default btn-transparent" role="button">
								        		<span>Saber más</span>
								        	</a>
								        </p>
								    </div>	
							    </div>	
						  	</div>	
						</div>
					</div>	
				</div>	
			</div>	
		</div>	
	</section>

	
    <div class="container">
    	<div class="row">
    		<div class="col-sm-12">
    				<article class="col-md-6" style="padding-top: 85px; padding-bottom: 50px;">
    					<figure class="text-center">
    						<img src="img/icons/icon-team.png" alt="">
    						<figcaption>
    							<p>
    								<strong class="mb-2">Un equipo de expertas</strong>
    								<div class="w-100" class="text-up"></div>
    								Estamos preparadas para brindarte un platillo excelente y una atención de calidad.
    							</p>
    						</figcaption>
    					</figure>
    				</article>
    				<article class="col-md-6"style="padding-top: 80px; padding-bottom: 50px;">
    					<figure class="text-center">
    						<img src="img/icons/icon-services.png" alt="">
    						<figcaption>
    							<p>
    								<strong class="mb-2">Una historia de servicio</strong>
    								<div class="w-100" class="text-up"></div>
    								Hemos venido brindando un servicio de calidad y excelencia desde el 2006 hasta la actualidad.
    							</p>
    						</figcaption>
    					</figure>
    				</article>
    		</div>
    	</div>
    </div>

    <section id="catagorie">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="block">
    					<div class="block-heading">
    						<h2>¿El truco de nuestro sabor?</h2> 						
    					</div>
    					<p class="text-center" style="padding-top: 0px; padding-bottom: 25px; color: #8b0000;">Seleccionar cuidadosamente los mejores ingredientes, para conquistar tu paladar.</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <div class="container-fluid px-0 galeria">
    	<div class="row justify-content-center mx-0 px-0">
    		<div class="col-md-4 px-0 mx-0" style="padding-left: 0px; padding-right: 0px;" >
    			<img src="img/display/img-01.jpg" alt="">
    		</div>
    		<div class="col-md-4 px-0 mx-0" style="padding-left: 0px; padding-right: 0px;">
    			<img src="img/display/img-02.jpg" alt="">
    		</div>
    		<div class="col-md-4 px-0 mx-0"  style="padding-left: 0px; padding-right: 0px;" >
    			<img src="img/display/img-03.jpg"alt="">
    		</div>
    	</div>

    	<div class="row justify-content-center mx-0 px-0">
    		<div class="col-md-4 px-0 mx-0" style="padding-left: 0px; padding-right: 0px;" >
    			<img src="img/display/img-01.jpg" alt="">
    		</div>
    		<div class="col-md-4 px-0 mx-0" style="padding-left: 0px; padding-right: 0px;">
    			<img src="img/display/img-02.jpg" alt="">
    		</div>
    		<div class="col-md-4 px-0 mx-0"  style="padding-left: 0px; padding-right: 0px;" >
    			<img src="img/display/img-03.jpg"alt="">
    		</div>
    	</div>

    	<div class="row justify-content-center mx-0 px-0">
    		<div class="col-md-4 px-0 mx-0" style="padding-left: 0px; padding-right: 0px;" >
    			<img src="img/display/img-01.jpg" alt="">
    		</div>
    		<div class="col-md-4 px-0 mx-0" style="padding-left: 0px; padding-right: 0px;">
    			<img src="img/display/img-02.jpg" alt="">
    		</div>
    		<div class="col-md-4 px-0 mx-0"  style="padding-left: 0px; padding-right: 0px;" >
    			<img src="img/display/img-03.jpg"alt="">
    		</div>
    	</div>
    </div>

	<section id="call-to-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<div class="block-heading">
							<h2>Nuestros patrocinadores</h2>
						</div>
					</div>	
					<div id="owl-example" class="owl-carousel">
						<div> <img src="images/company-1.png" alt=""></div>
						<div> <img src="images/company-2.png" alt=""></div>
						<div> <img src="images/company-3.png" alt=""></div>
						<div> <img src="images/company-4.png" alt=""></div>
						<div> <img src="images/company-5.png" alt=""></div>
						<div> <img src="images/company-6.png" alt=""></div>
						<div> <img src="images/company-8.png" alt=""></div>
						<div> <img src="images/company-9.png" alt=""></div>
						<div> <img src="images/company-4.png" alt=""></div>
						<div> <img src="images/company-5.png" alt=""></div>
						<div> <img src="images/company-6.png" alt=""></div>
						<div> <img src="images/company-8.png" alt=""></div>
						<div> <img src="images/company-9.png" alt=""></div>
						<div> <img src="images/company-1.png" alt=""></div>
						<div> <img src="images/company-2.png" alt=""></div>
						<div> <img src="images/company-3.png" alt=""></div>
					</div>
				</div>
			</div> 
		</div>
	</section>	
	<?php require_once "footer.php"; ?>
</body>
</html>