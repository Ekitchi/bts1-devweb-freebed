<!-- Traitements pré-HTML -->
<?php
	include_once ("includes.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>FreeBed Location</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<script src="jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="scripts/prefixfree.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-2.1.0.js"></script>
		<meta charset="UTF-8"/>
	</head>
	<body>
		<!-- Inclusion du header -->
		<?php include_once("header.php"); ?>
		
		<section id="Ajouter">Publiez votre annonce !</section>
		
		<section id="ajout_location">
			<div id="ajout_infos1">
				<table>
					<tr>
						<th>Titre de l'annonce:</th>
						<td> <input type="text" name="annonce_titre" class="form-control form-control-ajout" placeholder="Titre" value="" required/> </td>
					</tr>
					<tr>
						<th>Surface:</th>
						<td> <input type="number" name="annonce_surface" class="form-control form-control-ajout" placeholder="Surface en m²" value="" required/> </td>
					</tr>
					<tr>
						<th>Adresse:</th>
						<td> <input type="text" name="annonce_adresse" class="form-control form-control-ajout" placeholder="Adresse" value="" required/> </td>
					</tr>
					<tr>
						<th>Ville:</th>
						<td> <input type="text" name="annonce_ville" class="form-control form-control-ajout" placeholder="Ville" value="" required/> </td>
					</tr>
					<tr>
						<th>Type de logement:</th>
						<td> <select class="form-control form-control-ajout"> <option>Appartement</option> <option>Maison</option> <option>Chambre d'hôte</option> <option>Chambre privée</option> <option>Squat</option> </select> </td>
					</tr>
				</table>
			</div>
				
			<div id="ajout_infos2">
				<table>
					<tr>
						<th>Capacité d'accueil:</th>
						<td> <select class="form-control form-control-ajout"> <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option> <option>5+</option></select> </td>
					</tr>
					<tr>
						<th>Tarif/nuit:</th>
						<td> <input type="number" name="annonce_tarifn" class="form-control form-control-ajout" placeholder="Prix par nuit" value="" required/> </td>
					</tr>
					<tr>
						<th>Tarif/semaine:</th>
						<td> <input type="number" name="annonce_tarifs" class="form-control form-control-ajout" placeholder="Prix à la semaine" value="" required/> </td>
					</tr>
					<tr>
						<th>Description:</th>
						<td> <textarea cols="40" rows="21" class="form-control" placeholder="Informations complémentaires (Logement, quartiers, transports)..."></textarea> </td>
					</tr>
				</table>
			</div>
			
		</section>
		
		<footer id="ajouter_footer">
				<input type="submit" class="btn btn-profil" value="Annuler"/>
				<input type="submit" class="btn btn-profil" value="Publiez"/>
				<p style="float:right;margin:15px;">Voulez-vous publiez cette annonce ?</p>
		</footer>
			
	</body>
</html>



<!--
				<div id="nom">
					<form method="POST" action="ajout_logement.php">
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
				-->