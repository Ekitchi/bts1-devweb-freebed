<?php
	include("connexion.php");
	$query = "SELECT * FROM user";
	$resultat = mysqli_query ($connexion, $query);

	if ( isset($_POST["send"])){
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$oqp = $_POST["occupation"];
		$tel = $_POST["telephone"];

	if (1=1) {
		$query ="INSERT INTO user VALUES('', "
			."'".$nom."',"
			."'".$prenom."',"
			."'".$email."',"
			."'".$password."',"
			."'".$oqp."',"
			."'".$tel.")";
echo $query;
		$res = mysqli_query($connexion, $query) or die(mysqli_error($connexion));
	}
}
		include("main.php");
?>