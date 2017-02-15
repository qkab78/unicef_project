<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 22/01/2017
 * Time: 23:45
 */
session_start();
require "scripts/bdd.php";
if ($bdd){
    if (isset($_POST['submit'])){
        //On récupère ce qu'on a tapé
        $event_name = $_POST['event_name'];
        $event_description = $_POST['event_description'];
        $event_date = $_POST['event_date'];
        $event_photo = $_POST['event_photo'];

        //On récupère les events
        $req_office = "INSERT INTO event(event_name, event_description, event_date, event_photo) VALUES ('$event_name', '$event_description', '$event_date', '$event_photo')";
        $res_office = mysqli_query($bdd, $req_office);
        if ($res_office) {
            print_r("Données envoyées !");
            header("Location: http://localhost/Unicef_project/blogs.php?selected_id=1");
        }else{
            echo "Erreur dans l'envoie des données !";
        }
        mysqli_close($bdd);
    }
}else{
    print_r("Error");
    echo "Erreur: ".mysqli_error($bdd)."";
}
?>
<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Admin | YnovCampus</title>
        <?php require('views/head.php');?>
    </head>
    <body>
        <?php require('views/header.php');?>
        <h1 id="titre"><a href="#">
                <span class="glyphicon glyphicon-grain"></span>
            </a>Informations sur l'événement
            <a href="#">
                <span class="glyphicon glyphicon-grain"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </a><img  id ="logo" src="assets/img/ynov_campus.png" ></h1>

        <!--Carousel des articles-->
        <div class="container-fluid">
            <div id="antennaLoginForm">
                <form method="post" action="event_form.php">
                    <div class="form-group">
                        <label for="event_name">Nom de l'événement :</label>
                        <input type="text" class="form-control" name="event_name">
                    </div>
                    <div class="form-group">
                        <label for="event_description">Description de l'événement :</label>
                        <textarea class="form-control" name="event_description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="event_photo">Photo de l'événement :</label>
                        <input type="text" class="form-control" name="event_photo">
                    </div>
                    <div class="form-group">
                        <label for="event_date">Date de l'événement du responsable :</label>
                        <input type="date" class="form-control" name="event_date">
                    </div>
                    <input type="submit" class="btn btn-default aligncenter margin-top-custom" value="Valider" name="submit">
                </form>
            </div>
        </div>
        <?php require('scripts/scripts.php');?>
    </body>
</html>