<?php
include ("connexion.php");
$query = "SELECT * FROM user";
$resultat = mysqli_query($connexion, $query);

if (isset($_POST["email"]) && isset($_POST["nom"]) && isset($_POST["prenom"])) {
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$email = $_POST["email"];
	$password = $_POST["password_insc"];
	$oqp = $_POST["occupation"];
	$tel = $_POST["number"];

	if (1 == 1) {
		$query = "INSERT INTO `freebed`.`user` VALUES (NULL, '1', '".$nom."', '".$prenom."', '".$email."', '".$password."', '".$oqp."', '".$tel."');";
		$res = mysqli_query($connexion, $query) or die(mysqli_error($connexion));
	}
}
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=retry.php">'
?>