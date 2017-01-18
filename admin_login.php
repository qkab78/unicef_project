<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 18/01/2017
 * Time: 10:09
 */


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
    </a>Connexion admin
    <a href="#">
        <span class="glyphicon glyphicon-grain"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </a><img  id ="logo" src="assets/img/ynov_campus.png" ></h1>

<!--Carousel des articles-->
<div class="container-fluid">
    <div id="adminLoginForm">
        <form method="post" action="admin_login.php">
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Mot de passe :</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-default aligncenter margin-top-custom">Valider</button>
        </form>
    </div>
</div>


<?php require('scripts/scripts.php');?>
</body>
</html>
