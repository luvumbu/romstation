<?php
// L'url du fichier
header("Access-Control-Allow-Origin: *");

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "romstation";
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
$type_jeux =$text2;
$nombre_joueur_jeux =$text3;
$anne = $text4;
$nom_console= $_POST["nom_console"];
$image_console = $_POST["image_console"];
$nom_jeux = $_POST["nom_jeux"];





echo $image_console;
 


 


















echo $joueur_active;
echo $type_jeux;
echo $nombre_joueur_jeux;
echo $anne ;  


for ($i = 1; $i <strlen($_POST["image_console"]) ; $i++) {
	if($value1==false){
		$text1=$text1+$_POST["nom_jeux"][$i];
	} 
 if($_POST["nom_jeux"][$i]==" "){

 }
 
}





// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$filename = 'images/'.$nom_console.'/info.txt';
if (file_exists($filename)) {
    echo "Le fichier $filename existe.";
} else {
	mkdir('images/'.$nom_console, 0777);
    echo "Le fichier $filename n'existe pas.";
    $texte = "Création du fichier ";
    // création du fichier
    $f = fopen($filename, "x+");
    // écriture
    fputs($f, $texte );
    // fermeture
    fclose($f);
}




// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!










$url = 'http://romstation.fr'.$_POST["image_console"];
// Le chemin de sauvegarde
$path = 'images/'.$nom_console;
// On coupe le chemin
$exp = explode('/',$url);
// On recup l'adresse du serveur
$serv = $exp[0].'//'.$exp[2];
 
// On recup le nom du fichier
$name = sha1($_POST["image_console"]).".jpg";
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

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "romstation";
 








 


// $nom_console
// $nom_jeux





 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `console` WHERE `nom_console`="'.$nom_console.'"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
		$id_console=$row["id_console"];
    
  }
} 
$conn->close();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `jeux` WHERE `id_console`="'.$id_console.'" AND `titre_jeux`="'.$nom_jeux .'"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
		$id_console=$row["id_console"];
    
	}
 
} 
else {
	
	
// Create connection
$conn_adds = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_adds->connect_error) {
  die("Connection failed: " . $conn_adds->connect_error);
}




// 

$search  = array("&","'","à","À","á","Á","â","Â","ã","Ã","ä","Ä","å","Å","æ","Æ","è","È","é","É","ê","Ê","ë","Ë","ì","Ì","í","Í","î","Î","ï","Ï","ò","Ò","ó","Ó","ô","Ô","õ","Õ","ö","Ö","ø","Ø","ù","Ù","ú","Ú","û","Û","ü","Ü","ñ","Ñ","ý","Ý");
$replace = array('&amp',"&#039","&agrave","&Agrave","&aacute","&Aacute","&acirc","&Acirc","&atilde","&Atilde","&auml","&Auml","&aring","&Aring","&aelig","&AElig","&egrave","&Egrave","&eacute","&Eacute","&ecirc","&Ecirc","&euml","&Euml","&igrave","&Igrave","&iacute","&Iacute","&icirc","&Icirc","&iuml","&Iuml","&ograve","&Ograve","&oacute","&Oacute","&ocirc","&Ocirc","&otilde","&Otilde","&ouml","&Ouml","&oslash","&Oslash","&ugrave","&Ugrave","&uacute","&Uacute","&ucirc","&Ucirc","&uuml","&Uuml","&ntilde","&Ntilde","&yacute","&Yacute");

$joueur_active= str_replace($search, $replace, $joueur_active);
$nom_console= str_replace($search, $replace, $nom_console);
$name= str_replace($search, $replace, $name);
$nom_jeux= str_replace($search, $replace, $nom_jeux);
$nombre_joueur_jeux= str_replace($search, $replace, $nombre_joueur_jeux);
$type_jeux= str_replace($search, $replace, $type_jeux);
 
 
 







 

 

 

//






$sql_adds = "INSERT INTO jeux (id_console,joueur_active,nom_console,titre_jeux,image_jeux,type_jeux,nombre_joueur_jeux,anne)
VALUES ('$id_console','$joueur_active','$nom_console', '$nom_jeux','$name','$type_jeux','$nombre_joueur_jeux','$anne')";

if ($conn_adds->query($sql_adds) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql_adds . "<br>" . $conn_adds->error;
}
$conn_adds->close();











}
$conn->close();
?>