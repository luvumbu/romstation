<?php 
session_start();
$localisation = ""; // initiallisation de la variable
$REMOTE_ADDR =   $_SERVER['REMOTE_ADDR'];
if ($REMOTE_ADDR == "localhost" || $REMOTE_ADDR == "127.0.0.1" || $REMOTE_ADDR=="::1" ) {
	$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "romstation"; 
$_SESSION["servername"] = $servername ; 
$_SESSION["username"] = $username ; 
$_SESSION["password"] = $password ; 
$_SESSION["dbname"] = $dbname  ; 

	$localisation = "localhost"; // atribution delement variable	
	$_SESSION["REMOTE_ADDR"] = $localisation;
	$_SESSION["country"] = "country_local";
	$_SESSION["city"] = "city_local";
} else {
$servername = "localhost";
$username = "u481158665_romstation";
$password = "v3p9r3e@59A";
$dbname = $username;
$REMOTE_ADDR =   $_SERVER['REMOTE_ADDR'];

}
?>


<h1 style="color:white">
<?php 
 
$console= $_SESSION["console"] ; 
echo $console ; 
?>

</h1>

 
 


<?php 
















// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `jeux` WHERE `nom_console`="'.$console.'"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
		?> 
  <div>


<img class="" src="<?php echo  'images/'.$row['nom_console'].'/'.$row["image_jeux"] ?>" alt="Card image cap">

	<h2 class="card-title"><?php echo $row["titre_jeux"]?></h2>
<b class="btn btn-primary" title="<?php echo $row['nom_console']?>" onclick="selection(this)">Go somewhere</b> 

</div>

		
		<?php 
 
  }
} else {
  echo "0 results";
}
$conn->close();

?>