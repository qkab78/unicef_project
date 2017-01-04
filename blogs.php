<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Unicef | Blogs</title>
        <?php require('views/head.php');?>
	</head>
	<body>
		<?php require('views/header.php');?>
		<!--Carousel des articles-->
	    <div class="container-fluid">
	    	<h2 class="alignCenter">Evénements précédents</h2>
	        <div id="myCarousel" class="carousel slide" data-ride="carousel">
	            <!-- Indicators -->
	            <ol class="carousel-indicators">
	                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	                <li data-target="#myCarousel" data-slide-to="1"></li>
	                <li data-target="#myCarousel" data-slide-to="2"></li>
	                <li data-target="#myCarousel" data-slide-to="3"></li>
	            </ol>

	            <!-- Wrapper for slides -->
	            <div class="carousel-inner" id="carouselshadow" role="listbox">
	                <div class="item active">
	                    <img id="carouseldiv" src="assets/img/unicefe.jpg" alt="Chania">
	                    <div class="carousel-caption">
	                        <h3 id="TitreArcticle">Event 1</h3>
	                        <a class="btn btn-default carousel_link" href="#">En savoir plus</a>
	                    </div>
	                </div>

	                <div class="item">
	                    <img id="carouseldiv" src="assets/img/unicefe.jpg" alt="Chania">
	                    <div class="carousel-caption">
	                        <h3 id="TitreArcticle">Event 2</h3>
	                        <a class="btn btn-default carousel_link" href="#">En savoir plus</a>
	                    </div>
	                </div>

	               <div class="item">
	                    <img id="carouseldiv" src="assets/img/unicefe.jpg" alt="Chania">
	                    <div class="carousel-caption">
	                        <h3 id="TitreArcticle">Event 3</h3>
	                        <a class="btn btn-default carousel_link" href="#">En savoir plus</a>
	                    </div>
	                </div>

	                <div class="item">
	                    <img id="carouseldiv" src="assets/img/unicefe.jpg" alt="Chania">
	                    <div class="carousel-caption">
	                        <h3 id="TitreArcticle">Even 4</h3>
	                        <a class="btn btn-default carousel_link" href="#">En savoir plus</a>
	                    </div>
	                </div>
	            </div>

	            <!-- Left and right controls -->
	            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	                <span class="sr-only">Previous</span>
	            </a>
	            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	                <span class="sr-only">Next</span>
	            </a>
	        </div>
	    </div>
	    
		<hr>
	    <?php require('views/footer.php');?>
	    <?php require('scripts/scripts.php');?>
	</body>
</html>