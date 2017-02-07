<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 18/01/2017
 * Time: 10:09
 */
if (isset($_POST['submit'])){
    //On récupère ce qu'on a tapé
    $password = $_POST['password'];
    $username = $_POST['username'];

    //On récupère les events
    $bdd = mysqli_connect("localhost", "root", "", "ydays_unicef");
    $req_admin = "SELECT * from admin";
    $res_admin = mysqli_query($bdd, $req_admin);
    $data = mysqli_fetch_array($res_admin);
    if ($data) {
        if (($username != $data['admin_username']) || ($password != $data['admin_password'])){
            echo "Erreur ! Vos identifiants sont faux !";
        }else{
            session_start();
            $_SESSION['admin'] = true;
            print_r("Admin connecté !");
            header("Location: http://localhost/Unicef_project/admin_view.php");
        }
    }else{
        echo "Erreur: ".$req_admin.'<br>'.mysqli_error($bdd);
    }
    mysqli_close($bdd);
}
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
    <form method="post" action="admin_login.php">
        <div class="form-group">
            <label for="email">Pseudo :</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="pwd">Mot de passe :</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" name="submit" class="btn btn-default aligncenter margin-top-custom">Valider</button>
    </form>
</div>


<?php require('scripts/scripts.php');?>
</body>
</html>
