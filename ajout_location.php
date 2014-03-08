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
						<p><input type="text" name="name" placeholder="Nom de votre logement" value="" required/></p>
						<p><input type="email" name="email" placeholder="Surface" value="" required/></p>
						<p><input type="email" name="cmail" placeholder="Adresse" value="" required/></p>
						<p><input type="password" name="password" placeholder="Ville" value="" required/></p>
						<select id="type" name"type">
							<option value="Type">Type</option>

							<option value="Chambre d'Hôte">Chambre d'Hôte</option>
							<option value="Appartement">Appartement</option>
							<option value="Maison">Maison</option>
							<option value="Villa">Villa</option>

						</select>
						<p><input type="tarifnuit" name="tarifnuit" placeholder="Tarif à la nuit" value"" required/></p>
						<p><input type="tarifsemaine" name="tarifsemaine" placeholder="Tarif à la semaine" value"" required/></p>
						<p><input type="checkbox" id="CGU" name="CGU" value="CGU" required>
						<label for="CGU">CGU</label></p>
						<p><textarea rows="4" cols="50" name="info" placeholder="Description"></textarea></p>
						<p><input type="submit" name="enregistrer" value="Enregistrer"></p>
					</fieldset>
					</form>
				</div>
			</div>
		</section>
	</body>
</html>