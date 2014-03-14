<?php 
include_once ("includes.php"); 


$id = intval($_GET['id_logement']);
$query = "SELECT * FROM bien WHERE id='".$id."'";
$res = $bdd->query($query);
$données = $res->fetch();

$nom = utf8_encode($données['nom']);
$type = utf8_encode($données['type']);
$adresse = utf8_encode($données['adresse']);
$ville = utf8_encode($données['ville']);
$surface = utf8_encode($données['surface']);
$description = utf8_encode($données['description']);
$tarifj = utf8_encode($données['tarif_j']);
$tarifs = utf8_encode($données['tarif_s']);
$capacite = utf8_encode($données['capacite']);
$quartier = utf8_encode($données['quartier']);
$note = utf8_encode($données['note']);
$pays = utf8_encode($données['pays']);
$loueur = $données['id_L'];
$res -> CloseCursor();

$query = "SELECT * FROM user WHERE id='" . $loueur . "'";
$res = $bdd -> query($query);
$donnée = $res -> fetch();

$nom_u = utf8_encode($donnée['nom']);
$prenom_u = utf8_encode($donnée['prenom']);
$email_u = utf8_encode($donnée['email']);
$adresse_u = utf8_encode($donnée['adresse']);
$tel_u = utf8_encode($donnée['tel']);
?>


<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<script src="jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="scripts/prefixfree.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-2.1.0.js"></script>
		<meta charset="UTF-8"/>
		<title>FreeBed Location</title>
	</head>

	<body>
		<?php include_once ("header.php"); ?>
		
		
		
		<section>
			<article id="logementname">
				<h1><?php echo($nom); ?></h1>
				<p><?php echo($adresse) ?></p>
			</article>
		</section>




		<section id="slideshow_container">
			<article id="slideshow">
				<ul id="slContent">
					<li> <img id="s1" alt="FUMER" src="data/s1.png" width="25%" height="100%"> </li>
					<li> <img id="s2" alt="FUMER" src="data/s2.png" width="25%" height="100%"> </li>
					<li> <img id="s3" alt="FUMER" src="data/s3.jpg" width="25%" height="100%"> </li>
				</ul>
			</article>
			
			<article id="slideshow_miniature_container">
				<div id="button-prev"> </div>
				<div id="button-next"> </div>
				
				<div id="slideshow_miniature">
					<ul id="slmContent">
						<li> <a href="#s1"> <img alt="FUMER" src="data/s1.png" width="100" height="60"> </a> </li>
						<li> <a href="#s2"> <img alt="FUMER" src="data/s2.png" width="100" height="60"> </a> </li>
						<li> <a href="#s3"> <img alt="FUMER" src="data/s3.jpg" width="100" height="60"> </a> </li>
					</ul>
				</div>
			</article>
		</section>
		
		
		
		<section>
			<article id="logementinfos">
				
				<section id="logement_infos">
					<article id="logement_price">
						<table>
							<tr>
								<th>A partir de:</th>
								<td><?php echo($tarifj) ?>€</td>
							</tr>
						</table>
					</article>
					
					<article id="logement_note">
						 <table>
						 	<tr>
						 		<th>Note moyenne:</th>
						 		<td rowspan="2"> <?php echo($note); ?></td>
						 	</tr>
						 </table>
					</article>
					<article id="logement_date">
						<div class="logement_date">
							Arrivée <br/> <input type="date" placeholder="jj/mm/aaaa" class="form-control form-logement_infos"/>
						</div>
						<div class="logement_date">
							Départ <br/> <input type="date" placeholder="jj/mm/aaaa" class="form-control form-logement_infos"/>
						</div>
						<div class="logement_date">
							Voyageurs <br/>
							<select class="form-control" style="width:65px;height:30px;">
								<option>1</option><option>2</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9+</option>
							</select>
						</div>
					</article>
				</section>
				
				<section id="logementlouer">
					<input type="submit" class="btn btn_louer" value="Réserver ce logement !"/>
				</section>
				
				<section id="userinfos">
					<article id="user_avatar">
						<img src="http://placehold.it/250x250"/>
						<div> <a href="#"> <?php echo "$nom_u"; ?></a> </div>
					</article>
			
					<article id="user_infos">
						<table>
							<tr>
								<th> Email </th>
								<td> <?php echo "$email_u"; ?></td>
							</tr>
							<tr>
								<th> Prénom </th>
								<td> <?php echo "$prenom_u"; ?> </td>
							</tr>
							<tr>
								<th> Adresse </th>
								<td> <?php echo "$adresse_u"; ?> </td>
							</tr>
							<tr>
								<th> Tél. </th>
								<td> <?php echo "$tel_u"; ?> </td>
							</tr>
							
						</table>
					</article>
				</section>
				
			</article>
		</section>





		<section>
			<article id="logementdesc">
				
				<section id="logement_desc">
					<?php echo($description); ?>
				</section>
				
				<section id="logement_Tinfos">
					<table>
						<tr>
							<th>Type de Logement</th>
							<td><?php echo($type); ?></td>
						</tr>
						<tr>
							<th>Capacité d'accueil</th>
							<td><?php echo($capacite); ?></td>
						</tr>
						<tr>
							<th>Durée minimum</th>
							<td>PHP</td>
						</tr>
						<tr>
							<th>Tarif/jour</th>
							<td><?php echo($tarifj); ?>€</td>
						</tr>
						<tr>
							<th>Tarif/semaine</th>
							<td><?php echo($tarifs); ?>€</td>
						</tr>
						<tr>
							<th>Pays</th>
							<td><?php echo($pays); ?></td>
						</tr>
						<tr>
							<th>Ville</th>
							<td><?php echo($ville);?></td>
						</tr>
						<tr>
							<th>Quartier</th>
							<td><?php echo($quartier); ?></td>
						</tr>
						<tr>
							<th>Conditions d'annulation</th>
							<td>PHP</td>
						</tr>
					</table>
				</section>
				
			</article>
		</section>




		<section>
			<article id="allview">
				
				<section id="avis_ajout">
					<div class="avis_img">
						<img src="http://placehold.it/140x140">
					</div>
					<div class="avis_note">
						NOTE DE L'UTILISATEUR: <select name="avis_note"> <option value="1">1</option> <option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select> /10
					</div>
					<div id="avis_message">
						<textarea class="form-control" name="avis_message" cols="74%" rows="10%"></textarea>
					</div>
					<div id="avis_btn">
						<input type="submit" class="btn btn-avis" value="Ajouter"/>
					</div>
				</section>
				
				<section class="avis">
					<div class="avis_img">
						<img src="http://placehold.it/140x140">
					</div>
					<div class="avis_note">
						NOTE DE L'UTILISATEUR: ETOILE ETOILE ETOILE
					</div>
					<div class="avis_message">
						message de l'utilisateur
					</div>
					<div class="avis_date">
						Message envoyé le: <br/>
						XX/XX/XXX à XX:XX
					</div>
				</section>
				
				<section class="avis">
					<div class="avis_img">
						<img src="http://placehold.it/140x140">
					</div>
					<div class="avis_note">
						NOTE DE L'UTILISATEUR: ETOILE ETOILE ETOILE
					</div>
					<div class="avis_message">
						message de l'utilisateur
					</div>
					<div class="avis_date">
						Message envoyé le: <br/>
						XX/XX/XXX à XX:XX
					</div>
				</section>
				
				<section class="avis">
					<div class="avis_img">
						<img src="http://placehold.it/140x140">
					</div>
					<div class="avis_note">
						NOTE DE L'UTILISATEUR: ETOILE ETOILE ETOILE
					</div>
					<div class="avis_message">
						message de l'utilisateur
					</div>
					<div class="avis_date">
						Message envoyé le: <br/>
						XX/XX/XXX à XX:XX
					</div>
				</section>
			</article>
		</section>

	</body>
</html>