<?php require_once("scripts/session.php");?>
<?php
    $selected_id = $_GET['selected_id'];
    $blog_array = [];
    require_once("scripts/bdd.php");
    if ($bdd){
        $query = "SELECT * from event";
        $result = mysqli_query($bdd, $query);
        for ($i=0; $i <= sizeof($blog_array); $i++){
            if ($data = mysqli_fetch_array($result)){
                $blog_array[$i]['event_id'] = $data['event_id'];
                $blog_array[$i]['event_name'] = $data['event_name'];
                $blog_array[$i]['event_photo'] = $data["event_photo"];
                $blog_array[$i]['event_description'] = $data["event_description"];
                $blog_array[$i]['event_date'] = $data["event_date"];
            }
        }
        mysqli_close($bdd);
    }else{
        print_r("Error");
        echo "Erreur: ".mysqli_error($bdd)."";
    }
?>
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
                <div id="blogs" class="container-fluid">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <?php
                            for ($i=0; $i < sizeof($blog_array); $i++){
                            ?>
                            <li data-target="#myCarousel" data-slide-to="<?php echo $blog_array[$i]['event_id'];?>" class="active"></li>
                            <?php } ?>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" id="carouselshadow" role="listbox">
                            <div class="item active">
                                <img id="carouseldiv" src="<?php echo $blog_array[0]['event_photo'];?>" alt="Chania">
                                <div class="carousel-caption">
                                    <h3 id="TitreArcticle"><?php echo $blog_array[0]['event_name'];?></h3>
                                    <a id="blog" class="btn btn-default carousel_link" href="blogs.php?selected_id=<?php echo $blog_array[0]['event_id'];?>">
                                        En savoir plus
                                    </a>
                                </div>
                            </div>

                            <?php for ($i=1; $i < sizeof($blog_array); $i++) { ?>
                                <div class="item">
                                    <img id="carouseldiv" src="<?php echo $blog_array[$i]["event_photo"];?>" alt="Chania">
                                    <div class="carousel-caption">
                                        <h3 id="TitreArcticle"><?php echo $blog_array[$i]["event_name"];?></h3>
                                        <a class="btn btn-default carousel_link" href="blogs.php?selected_id=<?php echo $blog_array[$i]['event_id'];?>">En savoir plus</a>
                                    </div>
                                </div>
                            <?php } ?>
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

            <div id="blogDetails">
                <h2 id="title" class="titleAntenne">
                    <?php
                    echo $blog_array[$selected_id - 1]['event_name'];
                    ?>
                </h2>


                <div class="antenneandequipe">
                    <div class="equipe">
                        <h2>Photo de l'équipe</h2>
                        <img src="<?php echo $blog_array[$selected_id - 1]['event_photo'];?>" alt="event_photo">
                    </div>

                    <div class="antenne">

                        <div class="col-md-12">
                            <ul>
                                <h3>Description: </h3>
                                <li><?php echo $blog_array[$selected_id - 1]['event_description'];?></li>
                                <h3>Date : <?php echo $blog_array[$selected_id - 1]['event_date'];?></h3>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	    
		<hr>
	    <?php require('views/footer.php');?>
	    <?php require('scripts/scripts.php');?>
	</body>
</html>