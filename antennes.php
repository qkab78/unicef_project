<?php
    $event_id = $_GET["event_id"];
    $bdd = mysqli_connect("localhost", "root", "root", "ydays_unicef");
    //On récupère les events
    $req_event = "SELECT * from event  WHERE event_id=".$event_id." ";
    //$req_event = "SELECT * FROM users LEFT JOIN event ON users.user_is = event.manager_event_id";
    $res_event = mysqli_query($bdd, $req_event);
    $data_event = mysqli_fetch_array($res_event);
    if ($data_event) {
        $title = $data_event['title'];
        $description = $data_event['description'];
        $date = $data_event['date'];
        $address = $data_event['address'];
        $team_photo = $data_event['team_photo'];
    }

    //On récupère les users
    $req_user = "SELECT * from users where user_id='2'";
    $res_user = mysqli_query($bdd, $req_user);
    $data_user = mysqli_fetch_array($res_user);
    if ($data_user) {
        $lastname = $data_user['lastname'];
        $firstname = $data_user['firstname'];
        $email = $data_user['email'];
        $manager_photo = $data_user['manager_photo'];
        $phone_number = $data_user['phone_number'];
    }
    mysqli_close($bdd);
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
					<div class="col-md-6"><img src="<?php echo $manager_photo;?>" alt="Photo du responsable"></div>
					
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