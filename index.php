<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Unicef | YnovCampus</title>
        <?php require('views/head.php');?>
    </head>
<body>
    <?php require('views/header.php');?>


    <h1 id="titre"><a href="#">
          <span class="glyphicon glyphicon-grain"></span>
        </a>Bienvenue sur le site d'UNICEF Campus Paris
		   <a href="#">
          <span class="glyphicon glyphicon-grain"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </a><img  id ="logo" src="assets/img/ynov_campus.png" ></h1>

    <!--Carousel des articles-->
    <div class="container-fluid">
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
                        <h3 id="TitreArcticle">Article 1</h3>
                        <a class="btn btn-default carousel_link" href="#">En savoir plus</a>
                    </div>
                </div>

                <div class="item">
                    <img id="carouseldiv" src="assets/img/unicefe.jpg" alt="Chania">
                    <div class="carousel-caption">
                        <h3 id="TitreArcticle">Article 2</h3>
                        <a class="btn btn-default carousel_link" href="#">En savoir plus</a>
                    </div>
                </div>

               <div class="item">
                    <img id="carouseldiv" src="assets/img/unicefe.jpg" alt="Chania">
                    <div class="carousel-caption">
                        <h3 id="TitreArcticle">Article 3</h3>
                        <a class="btn btn-default carousel_link" href="#">En savoir plus</a>
                    </div>
                </div>

                <div class="item">
                    <img id="carouseldiv" src="assets/img/unicefe.jpg" alt="Chania">
                    <div class="carousel-caption">
                        <h3 id="TitreArcticle">Article 4</h3>
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

    <div id="block" class="col-md-12">
        <div id="block" class="col-md-6">
            <h3>Les missions des étudiants UNICEF Campus</h3>
            <p>- Représenter UNICEF  dans son entourage et fais connaître ses missions.</p>
            <p>- Créer des antennes Campus au sein des établissements d'enseignement supérieur.</p>
            <p>- Relayer les messages et campagnes d'UNICEF France auprès du public éudiant.</p>
            <p>- Travailler en réseau avec d'autres associations pour un monde plus solidaire.</p>
            <p>- Veiller à la pérénnité de l'antenne au sein des facs et écoles.</p>
            <p>- Intégrer une communauté de jeunes engagés pour porter la voix des enfants et des jeunes en France et dans le monde.</p>
        </div>
        <div id="block" class="col-md-6">
            <h3>Les actions des étudiants UNICEF Campus</h3>
            <p>- Organiser des évènements scolaires : expositions, conférences, colloques, concerts, spectacles, afterworks, tables rondes sur les enjeux de l'enfance en France, la situation des enfants dans le monde, les enjeux du développement, la place des jeunes dans la société...</p>
            <p>- Mener des animations de de sensibilisation sur les droits de l'enfant dans les collèges et lycées.</p>
            <p>- Accompagner les Jeunes ambassadeurs de l'UNICEF France ans le cadre de leur mission.</p>
            <p>- Créer des Clubs UNICEF et suivre leurs projets tout au long de l'année.</p>
            <p>- Participer à la Journée Bleue.</p>
        </div>
    </div>

    <hr>
    <?php require('views/footer.php');?>
    <?php require('scripts/scripts.php');?>
</body>
</html>