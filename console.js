// expected output: "monkey."
// Création d'un objet FormData
 var consoles = new FormData();
 var ipsPagination_page = document.getElementsByClassName("ipsPagination_page ipsPagination_active"); 
 consoles.append("page_actuelle", ipsPagination_page[0].innerText); 
// AVANT DE CHANGER DE PAGE VERIFIER LA PAGE ACTUELLE §§§§§
// Page actuelle 
// FAIRE UNE SEUILE FOIS !!!!!
var nom_console = document.getElementsByClassName("game_search_active_filters")[0]; 
consoles.append("nom_console", nom_console.innerText);
consoles.append("image_console",image_console.src);
//*******************************************1 */// Nom de la console 
// FAIRE UNE SEULE FOIS !!!!!
var nbre= 29; 
var image_console= document.getElementsByClassName("lazyloaded")[0]; 
var nombdeDeJeux = document.getElementsByClassName("game_inner_row").length; 
var game_inner_row = document.getElementsByClassName("game_inner_row");
var test = document.getElementsByTagName("img"); 
// source de la jaquette
// Bouble sur le nombre d'utilisateur !!!!!!!!!!!!!!!!!!!!!!!!! N°1
// Création et configuration d'une requête HTTP POST vers le fichier post_form.php
consoles.append("login", "root");
consoles.append("password", "root");
var req = new XMLHttpRequest();
req.open("POST", "console.php");
// Envoi de la requête en y incluant l'objet
req.send(consoles);
console.log(req);