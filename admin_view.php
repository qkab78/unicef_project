<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 31/01/2017
 * Time: 20:44
 */
require "scripts/session.php";
?>
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
    </a>Bienvenue Admin !
    <a href="#">
        <span class="glyphicon glyphicon-grain"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </a><img  id ="logo" src="assets/img/ynov_campus.png" ></h1>

<!--Carousel des articles-->
<div class="container-fluid">
    <div>
        <a class="btn btn-default" href="antenne_form.php">Ajouter une antenne</a>
        <a class="btn btn-default" href="event_form.php">Ajouter une événement</a>
        <a class="btn btn-default" href="scripts/logout.php">Se déconnecter</a>


    </div>
</div>


<?php require('scripts/scripts.php');?>
</body>
</html>
