<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Menú de hoy - Nacemi</title>
	<?php require_once "menu.php";?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">	
	<link rel="stylesheet" type="text/css" href="css/style.css"> 
	
</head>
<body>


  <section id="topic-header" style="padding-bottom: 40px;">
    <div class="container">
      <div class="row">
       <div class="col-md-4">
        <h1>MENÚ DE HOY</h1>
        <p>Conoce nuestros platillos del día</p>
      </div>  <!-- End of /.col-md-4 -->
      <div class="col-md-8 hidden-xs">
        <ol class="breadcrumb pull-right">
          <li><a href="index.php">Inicio</a></li>
          <li class="active">Menú de hoy</li>
        </ol>
      </div>  <!-- End of /.col-md-8 -->
    </div>  <!-- End of /.row -->
  </div>  <!-- End of /.container -->
</section>  <!-- End of /#Topic-header -->



  <!-- PRODUCTS Start
    ================================================== -->
	<div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/categories/asar-shish-kebab-costra-brochetas_23-2148253397.jpg" alt="Los Angeles" style="width:100%; height: 100%;">
        <div class="carousel-caption">
          <h3>PLATILLO 1</h3>
          <p>This is the first image slide</p>
        </div>
      </div>

      <div class="item">
        <img src="img/categories/fondo-salpicadura-zumo-naranja_1355-76.jpg" alt="Chicago" style="width:100%; height: 100%;">
        <div class="carousel-caption">
          <h3>PLATILLO 2</h3>
          <p>This is the second image slide</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/categories/filete-pescado_1339-930.jpg" alt="New York" style="width:100%; height: 100%;">
        <div class="carousel-caption">
          <h3>PLATILLO 3</h3>
          <p>This is the third image slide</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	<?php require_once "footer.php";?>
</body>
</html>