<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Unicef | Calendrier</title>
        <?php require('views/head.php');?>
        <link rel='stylesheet' href='assets/css/calendar/fullcalendar.css' />
        <link rel='stylesheet' href='assets/css/style2.css' />

	</head>
	<body>
		<?php require('views/header.php');?>
		<!--<div id="results">
			<iframe id="Calendar" 
                    src="https://www.google.com/calendar/embed?
                    height=550&amp;wkst=1&amp;bgcolor=%23FFFFFF&
                    amp;src=24tn4fht2sssdssfdiqqlsedk%40group.calendar.google.com&
                    amp;color=%238C500B&amp;ctz=Europe"
                        style="border-width: 0" width="950" 
                        height="520" frameborder="0" scrolling="no">
            </iframe>
		</div>-->
		<div id="calendar"></div>

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
	                        <h3 id="TitreArcticle">Event 4</h3>
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
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type='text/javascript' src='assets/js/fullcalendar/fullcalendar.js'></script>
        <script type='text/javascript' src='assets/js/fullcalendar/gcal.js'></script>
        <script type='text/javascript' src='functions/calendar/calendar.js'></script>
	    <!--<script type='text/javascript' src='assets/js/calendar/moment.js'></script>-->
        <!--<script type='text/javascript' src='assets/js/calendar/fullcalendar.js'></script>
        <script type='text/javascript' src='assets/js/calendar/gcal.js'></script>-->
	    <!--<script src="https://apis.google.com/js/api.js"></script>
		<script>
		function start() {
		  // 2. Initialize the JavaScript client library.
		  gapi.client.init({
		    'apiKey': 'AIzaSyBq7C_-5mMDpO_HNJAuRwAszp42Yk73H3g',
		    'discoveryDocs': ['https://people.googleapis.com/$discovery/rest'],
		    // clientId and scope are optional if auth is not required.
		    'clientId': '237341442236-k4mplu238g0uf9lg7ih8euucafjv7kah.apps.googleusercontent.com',
		    'scope': 'profile',
		  }).then(function() {
		    // 3. Initialize and make the API request.
		    return gapi.client.people.people.get({
		      resourceName: 'people/me'
		    });
		  }).then(function(response) {
		    console.log(response.result);
		  }, function(reason) {
		    console.log('Error: ' + reason.result.error.message);
		  });
		};
		// 1. Load the JavaScript client library.
		gapi.load('client', start);
		</script>-->

	</body>
</html>