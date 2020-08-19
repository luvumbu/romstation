<?php
// L'url du fichier
$value1=false;
$text1="";
// echo $_POST["game_row_info"];
 
// echo strlen($_POST["game_row_info"]);
$value1=false;
$value2=false;
$value3=false;
$value4=false;
$value5=false;

$text1="";
$text2="";
$text3="";
$text4="";
$text5="";

for( $i=0;$i<strlen($_POST["game_row_info"]);$i++){
//echo $i ;
if($_POST["game_row_info"][$i]==" "){
	$value1=true;
}
if($value1==false){
	$text1=$text1.$_POST["game_row_info"][$i];
}
if($value2==true && $_POST["game_row_info"][$i]!=" " && $value3==false ){
	
	if($_POST["game_row_info"][$i]=="|"){
		$value3=true;
	}
	else {
		$text3=$text3.$_POST["game_row_info"][$i];
	}
}
if($_POST["game_row_info"][$i]=="|"){
	$value2=true;
}
if($value1==true && $_POST["game_row_info"][$i]!=" " && $value2==false ){
	$text2=$text2.$_POST["game_row_info"][$i];
}

if($value3==true){
	if($_POST["game_row_info"][$i]!=" " && $_POST["game_row_info"][$i]!="|"){
		$text4=$text4.$_POST["game_row_info"][$i];
	}
}


 
 
} 

$joueur_active= $text1 ;
$nom_console =$text2;
$titre_jeux =$text3;
$image_jeux = $text4;


echo 
// for ($i = 1; $i <strlen($_POST["nom_jeux"]) ; $i++) {
// 	if($value1==false){
// 		$text1=$text1+$_POST["nom_jeux"][$i];
// 	} 
//  if($_POST["nom_jeux"][$i]==" "){

//  }
 
// }

// $url = 'http://romstation.fr'.$_POST["image_console"];
// // Le chemin de sauvegarde
// $path = 'images';
// // On coupe le chemin
// $exp = explode('/',$url);
// // On recup l'adresse du serveur
// $serv = $exp[0].'//'.$exp[2];
 
// // On recup le nom du fichier
// $name = sha1($_POST["nom_jeux"]).".jpg";
// // On genere le contexte (pour contourner les protections anti-leech)
// $xcontext = stream_context_create(array("http"=>array("header"=>"Referer: ".$serv."\r\n")));
// // On tente de recuperer l'image
// $content = file_get_contents($url,false,$xcontext);
// if ($content === false) {
// 	echo "\nImpossible de récuperer le fichier.";
// 	exit(1);
// }
// // Sinon, si c'est bon, on sauvegarde le fichier
// $test = file_put_contents($path.'/'.$name,$content);
// if ($test === false) {
// 	echo "\nImpossible de sauvegarder le fichier.";
// 	exit(1);
// }
// // Tout est OK
// echo "\nSauvegarde effectuée avec succés.";
?>