var nom_console ;
var image_console ; 
var nom_console_in;

var game_search_active_filters = document.getElementsByClassName('game_search_active_filters')[0].innerHTML;
var nom_console =game_search_active_filters;
 
var test = document.getElementsByTagName("img");
image_console=test[29].dataset.src;
var toTal =29;
var game_inner_row_length = document.getElementsByClassName("game_inner_row").length;
var game_inner_row=document.getElementsByClassName("game_inner_row");
var game_inner_row_info= document.getElementsByClassName("game_inner_row");
var identite = new FormData();
// Ajout d'information dans l'objet


// Envoi de la requête en y incluant l'objet
var game_row_info = document.getElementsByClassName("game_row_info");

for(var i =0 ;i<game_inner_row_length; i++ ){
	
	identite.append("image_console", test[toTal].dataset.src);
	identite.append("nom_console", nom_console);
	identite.append("nom_jeux",test[toTal].title );
	identite.append("game_row_info",game_row_info[i].innerText);	 
	// Création et configuration d'une requête HTTP POST vers le fichier post_form.php
	var req = new XMLHttpRequest();
	req.open("POST", "console.php");
	req.send(identite);
	console.log(req);
console.log(image_console=test[toTal].dataset.src);
	toTal=toTal+4;
}
