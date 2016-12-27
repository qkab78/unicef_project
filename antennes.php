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
	</head>
	<body>
		<?php require('views/header.php');?>
		<div id="antenneMap"></div>
		<div class="col-md-12">
			<div class="col-md-6"><h6>Photo de l'équipe</h6><img src="assets/img/unicef.png"></div>
			<div class="col-md-6">
				<h2>Nom de l'antenne</h2>
				<p>
					Descriptif: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquam et enim ac commodo. Praesent viverra ut purus a molestie. Praesent ante magna, aliquet non erat id, ullamcorper porta eros. Vestibulum tempor, nisl et luctus molestie, enim dolor mattis ipsum, quis fringilla est odio id leo. Nam et suscipit nisi. Donec tempor libero sed libero tincidunt, sit amet laoreet eros euismod. Nunc tempus nulla at nunc scelerisque, sit amet facilisis tellus dictum. Cras eu tristique turpis, nec egestas nisi. Aenean vestibulum accumsan volutpat. Curabitur at accumsan risus. Quisque hendrerit ullamcorper lobortis. Nulla facilisi. Mauris lobortis sem eget mauris interdum mattis at id purus.
				</p>
				<div class="col-md-12" style="border: 1px solid black;">
					<div class="col-md-6"><img src="assets/img/unicef.png" alt="Photo du responsable"></div>
					
					<div class="col-md-6">
						<h3>Nom Prenom</h3>
						<ul>
							<h3>Coordonées: </h3>
							<li>email: test@test.com</li>
							<li>tel: 01.02.03.04.05</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		<hr>
	    <?php require('views/footer.php');?>
	    <?php require('scripts/scripts.php');?>
	    <script type="text/javascript" src="functions/antenneMap.js"></script>
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXc-Ju4cYUc-iJmbe4ENigSs-YuWLZy6Q&callback=initMap"
    async defer></script>
	</body>
</html>