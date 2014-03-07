<?php
include_once("includes.php");
if (isset($_POST["Enregistrer"])) {
		if ($_POST["name"] != "" && $_POST["surface"] != "" && $_POST["adresse"] != "" && $_POST["ville"] != "" && $_POST["type"] 
		!= "" && $_POST["tarifnuit"] != "" && $_POST["tarifsemaine"] != "" && $_POST["CGU"] != "" && $_POST["info"] != "" && $_POST["Enregistrer"] != "") {
				
			$query = "INSERT INTO user (nom, prenom, email, password) 
		
				VALUES ('" . $_POST["nom"] . "', '" . $_POST["prenom"] . "', '" . $_POST["courriel"] . "', '" . $default_password . "');";
			try {
				$response = $bdd -> query($query);
			} 
			catch (Exception $e) {
				$resultat = "<span class='warning'>" . $e -> getMessage() . "</span>";
			}
			$resultat = "<span class='info'>Requête effectuée sans problèmes</span>";
	
		} else {
			$resultat = "<span class='warning'>Formulaire incomplet</span>";
		}
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text"/>
		<title>Nouveau Membre</title>
	</head>
	<body>
		<section id="enregistrement">
			<div id="enr_encadrement">
				<div id="nom">
					<form method="POST" action="ajout.php">
						<fieldset>
						<legend><h3><i>Formulaire d'enregistrement</i></h3></legend>
						<p><input type="text" name="name" placeholder="Nom de votre logement" value="name" required/></p>
						<p><input type="text" name="surface" placeholder="Surface" value="surface" required/></p>
						<p><input type="text" name="adresse" placeholder="Adresse" value="adresse" required/></p>
						<p><input type="text" name="ville" placeholder="Ville" value="ville" required/></p>
						<select id="type" name"type" value="type">
							<option value="Type">Type</option>

							<option value="Chambre d'Hôte">Chambre d'Hôte</option>
							<option value="Appartement">Appartement</option>
							<option value="Maison">Maison</option>
							<option value="Villa">Villa</option>

						</select>
						<p><input type="tarifnuit" name="tarifnuit" placeholder="Tarif à la nuit" value"tarifnuit" required/></p>
						<p><input type="tarifsemaine" name="tarifsemaine" placeholder="Tarif à la semaine" value"tarifsemaine" required/></p>
						<p><input type="checkbox" id="CGU" name="CGU" value="CGU" required>
						<label for="CGU">CGU</label></p>
						<p><textarea rows="4" cols="50" name="info" placeholder="Description" value"info"></textarea></p>
						<p><input type="submit" name="Enregistrer" value="Enregistrer"></p>
					</fieldset>
					</form>
				</div>
			</div>
		</section>
	</body>
</html>