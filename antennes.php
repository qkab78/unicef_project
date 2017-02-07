<?php
require_once("scripts/session.php");
$office_array = [];
require "scripts/bdd.php";
if ($bdd){
    //On récupère les events
    $req_office = "SELECT * from users_office";
    $res_office = mysqli_query($bdd, $req_office);
    for ($i=0; $i <= sizeof($office_array); $i++){
        if ($data_office = mysqli_fetch_array($res_office)) {
            $office_id = $data_office['office_user_id'];
            $lastname = $data_office['lastname'];
            $firstname = $data_office['firstname'];
            $title = $data_office['office_name'];
            $description = $data_office['office_description'];
            $address = $data_office['address'];
            $team_photo = $data_office['team_photo'];
            $user_photo = $data_office['user_photo'];
            $email = $data_office['email'];
            $phone_number = $data_office['phone_number'];

            $office_array[$i]['office_id'] = $office_id;
            $office_array[$i]['lastname'] = $lastname;
            $office_array[$i]['firstname'] = $firstname;
            $office_array[$i]['title'] = $title;
            $office_array[$i]['description'] = $description;
            $office_array[$i]['address'] = $address;
            $office_array[$i]['team_photo'] = $team_photo;
            $office_array[$i]['user_photo'] = $user_photo;
            $office_array[$i]['email'] = $email;
            $office_array[$i]['phone_number'] = $phone_number;
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
        <title>Unicef | Antennes</title>
        <?php require('views/head.php');?>
        <style type="text/css">
        	#antenneMap { height: 40%; }
        </style>
	    <script type="text/javascript" src="functions/antenneMap.js"></script>
	</head>
	<body>
		<?php require('views/header.php');?>
        <select name="users_office" id="users_office" onchange="change_value()">
            <option value="">Selectionner une personne :</option>
            <?php
            $selectID = $_GET['select_id'];
            for ($i=0; $i <= sizeof($office_array[$i]); $i++){
                $office_array['office_id'] = $i;
                ?>
                <option value="<?php echo $office_array[$i]['office_id'];?>"><?php echo $office_array[$i]['lastname']." ".$office_array[$i]['firstname'];?></option>
            <?php } ?>
        </select>
        <h2 id="title" class="titleAntenne">
            <?php
                echo $office_array[$selectID - 1]['title'];
            ?>
        </h2>
		<div id="antenneMap"></div>



        <div class="titleAndDescription">
            <p>
                Descriptif: <?php echo $office_array[$selectID - 1]['description'];?>
            </p>
        </div>

		<div class="antenneandequipe">
			<div class="equipe">
                <h2>Photo de l'équipe</h2>
                <img src="<?php echo $office_array[$selectID - 1]['team_photo'];?>">
            </div>

			<div class="antenne">

				<div class="col-md-12">
					<div class=""><img class="imgAntenne" src="<?php echo $office_array[$selectID - 1]['user_photo'];?>" alt="Photo du responsable"></div>

                    <h3 class=""><?php echo " ".$office_array[$selectID - 1]['lastname']." ".$office_array[$selectID - 1]['firstname']." ";?></h3>
                    <ul>
                        <h3>Coordonées: </h3>
                        <li>email: <?php echo $office_array[$selectID - 1]['email'];?></li>
                        <li>tel: <?php echo $office_array[$selectID - 1]['phone_number']?></li>
                    </ul>
				</div>
			</div>
		</div>

        <div id="ajaxTest"></div>

	    <?php require('views/footer.php');?>
	    <?php require('scripts/scripts.php');?>
        <script>
            function change_value() {
                select = document.getElementById("users_office");
                choice = select.selectedIndex  // Récupération de l'index du <option> choisi

                select_value = select.options[choice].value; // Récupération du texte du <option> d'index "choice"
                console.log("ID-before : "+select_value);
                window.location.href = 'http://localhost/unicef_project/antennes.php?select_id='+select_value;
            }
        </script>
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXc-Ju4cYUc-iJmbe4ENigSs-YuWLZy6Q&callback=initMap"
    async defer></script>

	</body>
</html>