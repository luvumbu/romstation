<?php
// L'url du fichier
$url = 'http://bokonzi.fr/login/uploads/1/add_picture_form/3c4840cf1e3a9541b48135f0467d4846df6e2781.jpg';
// Le chemin de sauvegarde
$path = 'images';
// On coupe le chemin
$exp = explode('/',$url);
// On recup l'adresse du serveur
$serv = $exp[0].'//'.$exp[2];
 
// On recup le nom du fichier
$name = "xxx.jpg";
// On genere le contexte (pour contourner les protections anti-leech)
$xcontext = stream_context_create(array("http"=>array("header"=>"Referer: ".$serv."\r\n")));
// On tente de recuperer l'image
$content = file_get_contents($url,false,$xcontext);
if ($content === false) {
	echo "\nImpossible de récuperer le fichier.";
	exit(1);
}
// Sinon, si c'est bon, on sauvegarde le fichier
$test = file_put_contents($path.'/'.$name,$content);
if ($test === false) {
	echo "\nImpossible de sauvegarder le fichier.";
	exit(1);
}
// Tout est OK
echo "\nSauvegarde effectuée avec succés.";
?>-