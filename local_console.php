<?php
// L'url du fichier
header("Access-Control-Allow-Origin: *");

 


 
$nom_console= $_POST["nom_console"];
 




$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "romstation";

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
   echo "Trouve";
  }
} else {
	
	

// Create connection
$conn_insert = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_insert->connect_error) {
  die("Connection failed: " . $conn_insert->connect_error);
}

$sql = "INSERT INTO console (nom_console)
VALUES ('$nom_console')";

if ($conn_insert->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn_insert->error;
}

$conn_insert->close();








}
$conn->close();
?>