// Création d'un objet FormData
var identite = new FormData();
var images = document.getElementsByTagName("img");
var game_inner_row = document.getElementsByClassName("game_inner_row").length;
var game_row_title = document.getElementsByClassName("game_row_title") ;
// Ajout d'information dans l'objet

var nombreTotal = 29;
for(var i = 0 ; i<game_inner_row;i++){
	
	identite.append("titre_jeux",game_row_title[i].innerText);
	identite.append("image_jeux", images[nombreTotal].dataset.src);

	identite.append("password", "root");
	// Création et configuration d'une requête HTTP POST vers le fichier post_form.php
	var req = new XMLHttpRequest();
	req.open("POST", "jeux.php");
	// Envoi de la requête en y incluant l'objet
	req.send(identite);
	console.log(req);
	nombreTotal = nombreTotal + 4;
}
 
