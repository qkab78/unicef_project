//Déclaration des variables
var map;
var marker;
var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Antenne</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
      'sandstone rock formation in the southern part of the '+
      'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
      'south west of the nearest large town, Alice Springs; 450&#160;km '+
      '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
      'features of the Uluru - Kata Tjuta National Park. Uluru is '+
      'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
      'Aboriginal people of the area. It has many springs, waterholes, '+
      'rock caves and ancient paintings. Uluru is listed as a World '+
      'Heritage Site.</p>'+
      '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
      'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
      '(last visited June 22, 2009).</p>'+
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
	    title: 'Description de cette Antenne',
	    draggable: false,
	    animation: google.maps.Animation.DROP,
	    infoWindow: {
	          content: 'Description de cette Antenne<br> <a href="index.php">Retour à l\'accueil</a>'
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

