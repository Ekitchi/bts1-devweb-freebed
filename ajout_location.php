<!-- Traitements pré-HTML -->
<?php
include_once ("includes.php");
if (isset($_POST["annonce_titre"]) && isset($_POST["annonce_adresse"])) {
			$type = $_POST["annonce_type"];
			$surface = $_POST["annonce_surface"];
			$nom = $_POST["annonce_titre"];
			$description = $_POST["annonce_description"];
			$adresse = $_POST["annonce_adresse"];
			$ville = $_POST["annonce_ville"];
			$tarif_j = $_POST["annonce_tarifn"];
			$tarif_s = $_POST["annonce_tarifs"];
			$capacite = $_POST["annonce_capacite"];

			
			$query = "INSERT INTO `freebed`.`bien` VALUES (NULL, NULL, '".$type."', '".$surface."', '".$nom."', '".$description."', '".$capacite."', '".$adresse."', '".$ville."', '".$tarif_j."', '".$tarif_s."')";
			$res = $bdd -> query($query);
			$ajout = TRUE;
			
		}
		else {
			$ajout = FALSE;
 			 }
		?>
<!DOCTYPE html>
<html>
	<head>
		<title>FreeBed Location</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<script type="text/javascript" src="scripts/prefixfree.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-2.1.0.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.9.1.js"></script>
		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="/resources/demos/style.css">
		<meta charset="UTF-8"/>
		<script>
			$(function() {
				$(".from").datepicker({
					defaultDate : "+1w",
					changeMonth : true,
					numberOfMonths : 1,
					onClose : function(selectedDate) {
						$(".to").datepicker("option", "minDate", selectedDate);
					}
				});
				$(".to").datepicker({
					defaultDate : "+1w",
					changeMonth : true,
					numberOfMonths : 1,
					onClose : function(selectedDate) {
						$(".from").datepicker("option", "maxDate", selectedDate);
					}
				});
			});
		</script>
		<script>
			function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function(e) {
						$('.img_prev').attr('src', e.target.result).width(100).height(60);
					};

					reader.readAsDataURL(input.files[0]);
				}
			}
		</script>
	</head>
	<body>
		<!-- Inclusion du header -->
		<?php
		include_once ("header.php");
		?>
		
		<section id="Ajouter">
			Publiez votre annonce !
		</section>
		<?php
		if($ajout)
			echo("<h1>Votre annonce a bien été ajoutée.</h1>");
		?>
		<form method="post" action="ajout_location.php">
		<section id="ajout_location">
			<div id="ajout_infos1">
				<table>
					<tr>
						<th>Titre de l'annonce:</th>
						<td>
						<input type="text" name="annonce_titre" class="form-control form-control-ajout" placeholder="Titre" value="" required/>
						</td>
					</tr>
					<tr>
						<th>Surface:</th>
						<td>
						<input type="number" name="annonce_surface" class="form-control form-control-ajout" placeholder="Surface en m²" value="" required/>
						</td>
					</tr>
					<tr>
						<th>Adresse:</th>
						<td>
						<input type="text" name="annonce_adresse" class="form-control form-control-ajout" placeholder="Adresse" value="" required/>
						</td>
					</tr>
					<tr>
						<th>Ville:</th>
						<td>
						<input type="text" name="annonce_ville" class="form-control form-control-ajout" placeholder="Ville" value="" required/>
						</td>
					</tr>
					<tr>
						<th>Quartier:</th>
						<td>
						<input type="text" name="annonce_quartier" class="form-control form-control-ajout" placeholder="Quartier" value="" required/>
						</td>
					</tr>
					<tr>
						<th>Type de logement:</th>
						<td>
						<select class="form-control form-control-ajout">
							<option>Appartement</option><option>Maison</option><option>Chambre d'hôte</option><option>Chambre privée</option><option>Squat</option>
						</select></td>
					</tr>
				</table>
			</div>

			<div id="ajout_infos2">
				<table>
					<tr>
						<th>Capacité d'accueil:</th>
						<td>
						<select class="form-control form-control-ajout">
							<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>5+</option>
						</select></td>
					</tr>
					<tr>
						<th>Tarif/nuit:</th>
						<td>
						<input type="number" name="annonce_tarifn" class="form-control form-control-ajout" placeholder="Prix par nuit" value="" required/>
						</td>
					</tr>
					<tr>
						<th>Tarif/semaine:</th>
						<td>
						<input type="number" name="annonce_tarifs" class="form-control form-control-ajout" placeholder="Prix à la semaine" value="" required/>
						</td>
					</tr>
					<tr>
						<th>Description:</th>
						<td>						<textarea cols="40" rows="21" class="form-control" placeholder="Informations complémentaires (Logement, quartiers, transports)..."></textarea></td>
					</tr>
				</table>
			</div>
		</section>

		<section id="ajout_location2">
			<div id="ajout_calendrier">
				<table>
					<tr>
						<th colspan="2">Date de disponibilité</th>
					</tr>
					<tr>
						<td><label for="from">Du </label>
						<input type="text" class="from" name="from">
						</td>
						<td><label for="to"> à </label>
						<input type="text" class="to" name="to">
						</td>
					</tr>
					<tr>
						<td><label for="from">Du </label>
						<input type="text" class="from" name="from">
						</td>
						<td><label for="to"> à </label>
						<input type="text" class="to" name="to">
						</td>
					</tr>
					<tr>
						<td><label for="from">Du </label>
						<input type="text" class="from" name="from">
						</td>
						<td><label for="to"> à </label>
						<input type="text" class="to" name="to">
						</td>
					</tr>
					<tr>
						<td><label for="from">Du </label>
						<input type="text" class="from" name="from">
						</td>
						<td><label for="to"> à </label>
						<input type="text" class="to" name="to">
						</td>
					</tr>
				</table>
			</div>

			<div id="ajout_img">
				<table>
					<tr>
						<th colspan="2"> Photo de vôtre logement</th>
					</tr>
					<tr>
						<td>
						<input type='file' onchange="readURL(this);" />
						</td>
						<td><img class="img_prev" src="#" alt="" /></td>
					</tr>
					<tr>
						<td>
						<input type='file' onchange="readURL(this);" />
						</td>
						<td><img class="img_prev" src="#" alt="" /></td>
					</tr>
					<tr>
						<td>
						<input type='file' onchange="readURL(this);" />
						</td>
						<td><img class="img_prev" src="#" alt="" /></td>
					</tr>
					<tr>
						<td>
						<input type='file' onchange="readURL(this);" />
						</td>
						<td><img class="img_prev" src="#" alt="" /></td>
					</tr>
				</table>
			</div>
		</section>

		<footer id="ajouter_footer">
			<input type="submit" class="btn btn-profil" value="Annuler"/>
			<input type="submit" class="btn btn-profil" value="Publier"/>
			<p style="float:right;margin:15px;">
				Voulez-vous publier cette annonce ?
			</p>
		</form>
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