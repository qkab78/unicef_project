<?php
    require_once("scripts/session.php");
    $bdd = mysqli_connect("localhost", "root", "root", "ydays_unicef");
    if ($bdd){
        //On récupère les events
        $req_office = "SELECT * from users_office";
        $res_office = mysqli_query($bdd, $req_office);
        $data_office = mysqli_fetch_array($res_office);
        if ($data_office) {
            $lastname = $data_office['lastname'];
            $firstname = $data_office['firstname'];
            $title = $data_office['office_name'];
            $description = $data_office['office_description'];
            $address = $data_office['address'];
            $team_photo = $data_office['team_photo'];
            $user_photo = $data_office['user_photo'];
            $email = $data_office['email'];
            $phone_number = $data_office['phone_number'];
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
        <title>Unicef | Antennes</title>
        <?php require('views/head.php');?>
        <style type="text/css">
        	#antenneMap { height: 40%; }
        </style>
	    <script type="text/javascript" src="functions/antenneMap.js"></script>
	</head>
	<body>
		<?php require('views/header.php');?>
		<div id="antenneMap"></div>
		<div class="col-md-12">
			<h2>Photo de l'équipe</h2>
			<div class="col-md-6"><img src="<?php echo $team_photo;?>"></div>
			<div class="col-md-6">
				<h2><?php echo $title;?></h2>
				<p>
					Descriptif: <?php echo $description;?>
				</p>
				<div class="col-md-12" style="border: 1px solid black;">
					<div class="col-md-6"><img src="<?php echo $user_photo;?>" alt="Photo du responsable"></div>
					
					<div class="col-md-6">
						<h3><?php echo " ".$lastname." ".$firstname." ";?></h3>
						<ul>
							<h3>Coordonées: </h3>
							<li>email: <?php echo $email;?></li>
							<li>tel: <?php echo $phone_number;?></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		<hr>
	    <?php require('views/footer.php');?>
	    <?php require('scripts/scripts.php');?>
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXc-Ju4cYUc-iJmbe4ENigSs-YuWLZy6Q&callback=initMap"
    async defer></script>
	</body>
</html>