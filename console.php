<?php 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "romstation";
$username =$_POST["login"] ;
$password =$_POST["password"] ;

$nom_console= $_POST["nom_console"]; 
$image_console =$_POST["image_console"];
$image_console =str_replace("localhost","romstation.fr",$image_console);

$nom_console_in= "images/".sha1($nom_console).".jpg";
$nom_console_sha1 =sha1($nom_console);
//echo $image_console ; 
// Create connection

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
    echo "Un resultat trouve";
  }
} else {
	
	


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO console (nom_console,image_console,nom_console_in)
VALUES ('$nom_console','$image_console','$nom_console_in')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
$conn->close();
// L'url du fichier





$filename = $nom_console."/".$nom_console.".txt";
if (file_exists($filename)) {
    echo "Le fichier $filename existe.";
} else {
    echo "Le fichier $filename n'existe pas.";
		$texte1 = "Console ".$nom_console." ";
		$texte2="Source image Romstation :".$image_console;
		$texte = $texte1.$texte2;
		// création du fichier
		mkdir($nom_console, 0777);
    $f = fopen($filename, "x+");
    // écriture
    fputs($f, $texte );
    // fermeture
		fclose($f);
		$url = $image_console;
// Le chemin de sauvegarde


$path = $nom_console;
// On coupe le chemin
$exp = explode('/',$url);
// On recup l'adresse du serveur
$serv = $exp[0].'//'.$exp[2];
 
// On recup le nom du fichier
$name = "/".$nom_console.".jpg";
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

$path = "images";
// On coupe le chemin
$exp = explode('/',$url);
// On recup l'adresse du serveur
$serv = $exp[0].'//'.$exp[2];
 
// On recup le nom du fichier
$name = "/".$nom_console_sha1.".jpg";
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
}