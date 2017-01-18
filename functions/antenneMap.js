//Déclaration des variables
var map;
var marker;
var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Ynov Campus</h1>'+
      '<div id="bodyContent">'+
      '<p><?php echo $description?>,'+
      '</div>'+
      '</div>';
var infowindow;

//Initialisation de la carte
function initMap() {
	//Position sur la carte
	var myLatLng = {lat: 48.85611, lng: 2.392534};

    // Create a map object and specify the DOM element for display.
    map = new google.maps.Map(document.getElementById('antenneMap'), {
    	center: myLatLng,
      	scrollwheel: false,
      	zoom: 17
    });

    //création d'un marqueur
    marker = new google.maps.Marker({
	    position: myLatLng,
	    map: map,
	    title: 'Ynov Campus',
	    draggable: false,
	    animation: google.maps.Animation.DROP,
	    infoWindow: {
	          content: '<?php echo $description;?>'
	        }
  	});
  	//effet 'toggle' quand on clique sur le marqueur
    marker.addListener('click', toggleBounce);

    //création d'une fenêtre d'infomation
    infowindow = new google.maps.InfoWindow({
    	content: contentString
  	});
  	//Affichage de la fenêtre d'information lorsque l'on clique sur le marqueur
  	marker.addListener('click', function() {
    	infowindow.open(map, marker);
  	});

}

//Effet Toggle sur le marqueur
function toggleBounce() {

  	if (marker.getAnimation() !== null) {
    	marker.setAnimation(null);
  	} else {
    	marker.setAnimation(google.maps.Animation.BOUNCE);
  	}
}

