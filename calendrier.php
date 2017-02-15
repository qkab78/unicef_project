<?php require "scripts/session.php";
$events_array = [];
require_once("scripts/bdd.php");

$query = "SELECT * from event";
$result = mysqli_query($bdd, $query);
for ($i=0; $i <= sizeof($events_array); $i++) {
    if ($data = mysqli_fetch_array($result)) {
        $events_array[$i]['event_id'] = $data['event_id'];
        $events_array[$i]['event_name'] = $data['event_name'];
        $events_array[$i]['event_photo'] = $data["event_photo"];
        $events_array[$i]['event_description'] = $data["event_description"];
        $events_array[$i]['event_date'] = $data["event_date"];
    }
}
?>
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
		<div id="calendar" class="calendrierCSS"></div>
        <!--Carousel des articles-->
        <div class="container-fluid">
            <h2 class="alignCenter">Evénements précédents</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <div class="container-fluid">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <?php
                            $query = "SELECT * from event";
                            $result = mysqli_query($bdd, $query);
                            for ($i=0; $i < sizeof($events_array); $i++) {
                                ?>
                                <li data-target="#myCarousel" data-slide-to="<?php echo $events_array[$i]["event_id"];?>" class="active"></li>
                            <?php } ?>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" id="carouselshadow" role="listbox">
                            <div class="item active">
                                <img id="carouseldiv" src="<?php echo $events_array[0]["event_photo"];?>" alt="Chania">
                                <div class="carousel-caption">
                                    <h3 id="TitreArcticle"><?php echo $events_array[0]["event_name"];?></h3>
                                    <a class="btn btn-default carousel_link" href="blogs.php?selected_id=<?php echo $events_array[0]['event_id'];?>">En savoir plus</a>
                                </div>
                            </div>

                            <?php for ($i=1; $i < sizeof($events_array); $i++) { ?>
                                <div class="item">
                                    <img id="carouseldiv" src="<?php echo $events_array[$i]["event_photo"];?>" alt="Chania">
                                    <div class="carousel-caption">
                                        <h3 id="TitreArcticle"><?php echo $events_array[$i]["event_name"];?></h3>
                                        <a class="btn btn-default carousel_link" href="blogs.php?selected_id=<?php echo $events_array[$i]['event_id'];?>">En savoir plus</a>
                                    </div>
                                </div>
                            <?php }mysqli_close($bdd); ?>
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
            </div>
        </div>
		<hr>
	    <?php require('views/footer.php');?>
	    <?php require('scripts/scripts.php');?>
        <script type='text/javascript' src='assets/js/fullcalendar-3.1.0/lib/jquery.min.js'></script>
        <script type='text/javascript' src='assets/js/fullcalendar-3.1.0/lib/jquery-ui.min.js'></script>
        <script type='text/javascript' src='assets/js/fullcalendar-3.1.0/lib/moment.min.js'></script>
        <script type='text/javascript' src='assets/js/fullcalendar-3.1.0/fullcalendar.js'></script>
        <!--<script type='text/javascript' src='assets/js/fullcalendar/fullcalendar.js'></script>-->
        <script type='text/javascript' src='assets/js/fullcalendar-3.1.0/locale/fr.js'></script>
        <script type='text/javascript' src='assets/js/fullcalendar-3.1.0/gcal.js'></script>
        <script type='text/javascript' src='functions/calendar/calendrier.js'></script>

	</body>
</html>