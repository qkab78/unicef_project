<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 22/01/2017
 * Time: 23:45
 */
session_start();
$bdd = mysqli_connect("localhost", "root", "root", "ydays_unicef");
if ($bdd){
   if (isset($_POST['submit'])){
       //On récupère ce qu'on a tapé
       $lastname = $_POST['lastname'];
       $firstname = $_POST['firstname'];
       $title = $_POST['office_name'];
       $description = $_POST['office_description'];
       $address = $_POST['address'];
       $team_photo = $_POST['team_photo'];
       $user_photo = $_POST['user_photo'];
       $email = $_POST['email'];
       $phone_number = $_POST['phone_number'];

       //On récupère les events
       $req_office = "INSERT INTO users_office(lastname, firstname, office_name, office_description, address, team_photo, user_photo, email, phone_number) 
VALUES ('$lastname', '$firstname', '$title', '$description', '$address', '$team_photo', '$user_photo', '$email', '$phone_number')";
       $res_office = mysqli_query($bdd, $req_office);
       if ($res_office) {
            print_r("Données envoyées !");
            header("Location: http://localhost/Unicef_project/antennes.php");
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
            </a>Informations sur l'antenne
            <a href="#">
                <span class="glyphicon glyphicon-grain"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </a><img  id ="logo" src="assets/img/ynov_campus.png" ></h1>

        <!--Carousel des articles-->
        <div class="container-fluid">
            <div id="antennaLoginForm">
                <form method="post" action="antenne_form.php">
                    <div class="form-group">
                        <label for="office_name">Nom de l'antenne :</label>
                        <input type="text" class="form-control" name="office_name">
                    </div>
                    <div class="form-group">
                        <label for="office_description">Description de l'antenne :</label>
                        <textarea class="form-control" name="office_description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="address">Adresse de l'antenne :</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="form-group">
                        <label for="team_photo">Photo de l'équipe :</label>
                        <input type="text" class="form-control" name="team_photo">
                    </div>

                    <div class="form-group">
                        <label for="lastname">Nom du responsable :</label>
                        <input type="text" class="form-control" name="lastname">
                    </div>

                    <div class="form-group">
                        <label for="firstname">Prénom du responsable :</label>
                        <input type="text" class="form-control" name="firstname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email du responsable :</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label for="user_photo">Photo du responsable :</label>
                        <input type="text" class="form-control" name="user_photo">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Numéro du responsable :</label>
                        <input type="text" class="form-control" name="phone_number">
                    </div>
                    <input type="submit" class="btn btn-default aligncenter margin-top-custom" value="Valider" name="submit">
                </form>
            </div>
        </div>
        <?php require('scripts/scripts.php');?>
    </body>
</html>