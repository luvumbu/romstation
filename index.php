<h1 style="color:white">
 <img src="https://www.romstation.fr/uploads/monthly_2020_01/logo.png.f885659427b95fec2008ee3c50ae1f1b.png" alt="" srcset=""> Consoles 
</h1>

<div class="space">

</div>
 <div class="display_flex" id="source">


<?php
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
$_SESSION["localisation"] = $localisation;











 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `console` WHERE 1';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "Consoles :  " . $row["nom_console"];
    // echo '<img src="'.$row["image_console"].'" alt="" srcset="">';

    ?>

 <div>


  <img class="" src="<?php echo $row["image_console"] ?>" alt="Card image cap">
 
    <h2 class="card-title"><?php echo $row["nom_console"]?></h2>
  <b class="btn btn-primary" title="<?php echo $row['nom_console']?>" onclick="selection(this)">Go somewhere</b> 
  
  </div>
    <?php 
    echo "<br/>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</div>


<style>
  .display_flex{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
  }
  .display_flex img {
    width: 200px;

  }
  .display_flex div {
    margin:100px;
    
  }
  h2 {
    padding: 15px;
  }
  h1 {
    text-align: center;
    padding: 20px;
    background-color: #222222;
 
    text-shadow: 2px 2px 2px black;
    
  }
  .space {
    height: 200px;
  }
</style>










<script>
class Information {
	constructor(link) {
		this.link = link;
		this.identite = new FormData();
		this.req = new XMLHttpRequest();
		this.identite_tab = [
		];
	}
	info() {
		return this.identite_tab; 
	}
	add(info, text){
		this.identite_tab.push([info, text]); 
	}
	push(){
		for(var i = 0 ; i < this.identite_tab.length ; i++){
			console.log(this.identite_tab[i][1]);
			this.identite.append(this.identite_tab[i][0], this.identite_tab[i][1]);		 
		}		
		this.req.open("POST",this.link);
		this.req.send(this.identite);
		console.log(this.req);	 
	}
}


function selection(_this) {
 
  var ok = new Information("php.php"); // création de la classe 
ok.add("console", _this.title); // ajout de l'information pour lenvoi 
 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 


setTimeout(function(){ 
  Ajax()
  
   }, 300);

}
function Ajax(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("source").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "jeux_video.php", true);
  xhttp.send();
}





</script>




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

