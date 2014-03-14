<?php 
include_once ("includes.php"); 


$id = intval($_GET['id_logement']);
$photos = new ArrayObject();
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

if (isset($_POST["sauvmodif"])) {
	$typelogement = $_POST["typelogement"];
	$surfacelogement = $_POST["surfacelogement"];
	$payslogement = $_POST["payslogement"];
	$villelogement = $_POST["villelogement"];
	$tarifjour = $_POST["tarifjour"];
	$tarifsemaine = $_POST["tarifsemaine"];
	$capacitelogement = $_POST["capacitelogement"];
	$query = "";
	
		$query = "UPDATE bien SET type='" . $typelogement . "' , surface='" . $surfacelogement . "', pays='" . $payslogement . "', ville='" . $villelogement . "', tarif_j=" . $tarifjour . ", tarif_s=" . $tarifsemaine . ", 
			capacite=" . $capacitelogement . " WHERE id=" . $_GET["id_logement"]. ";";
		
		echo $query;	
			
		$res = $bdd -> query($query);

		echo "Modification Enregistré";	
		
		
	


}

$query = "SELECT url_photo FROM photos WHERE id_bien='".$id."'";
$res = $bdd -> query($query);

while ($données = $res -> fetch())
{
	$photos->append($données['url_photo']);
}

$slidechaud = "
<section id='slideshow_container'>
			<article id='slideshow'>
				<ul id='slContent'>";

foreach ($photos as $e => $var) {
	$slidechaud = $slidechaud."<li> <img id='id".$e."' alt='FUMER' src='data/photos/".$var."' width='25%' height='100%'> </li>";
}
$slidechaud = $slidechaud."
				</ul>
			</article>
			<article id='slideshow_miniature_container'>
				<div id='button-prev'> </div>
				<div id='button-next'> </div>
				
				<div id='slideshow_miniature'>
					<ul id='slmContent'>";
					
foreach ($photos as $e => $var) {
	$slidechaud = $slidechaud."<li> <a href='#id".$e."'> <img alt='FUMER' src='data/photos/".$var."' width='100' height='60'> </a> </li>";
	
}

$slidechaud = $slidechaud."
					</ul>
				</div>
			</article>
		</section>
";

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


<?php echo ($slidechaud); ?>

		<!--<section id="slideshow_container">
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
		</section>-->
		
		
		
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
				
				
				
			</article>
		</section>





		<section>
			<form method="post" action="modif_logement.php?id_logement=<?php echo $id; ?>">
			<article id="logementdesc">
				
				<section id="logement_desc">
					<?php echo($description); ?>
				</section>
				
				<section id="logement_Tinfos">
					<table>
						<tr>
							<th>Type de Logement</th>
							<td><select name="typelogement">
								<option value="1">Chambre d'hôte</option>
								<option value="2">Appartement</option>
								<option value="3">Maison</option>
								<option value="4">Villa</option>
							</td>
						</tr>
						<tr>
							<th>Capacité d'accueil</th>
							<td><input type="texte" name="capacitelogement" value="<?php echo($capacite); ?>"/></td>
						</tr>
						<tr>
							<th>Tarif/jour</th>
							<td><input type="texte" name="tarifjour" value="<?php echo($tarifj); ?>"/>€</td>
						</tr>
						<tr>
							<th>Tarif/semaine</th>
							<td><input type="texte" name="tarifsemaine" value="<?php echo($tarifs); ?>"/>€</td>
						</tr>
						<tr>
							<th>Pays</th>
							<td><input type="texte" name="payslogement" value="<?php echo($pays); ?>"/></td>
						</tr>
						<tr>
							<th>Ville</th>
							<td><input type="texte" name="villelogement" value="<?php echo($ville); ?>"/></td>
						</tr>
						<tr>
							<th>Surface</th>
							<td><input type="texte" name="surfacelogement" value="<?php echo($surface); ?>"/>m²</td>
						</tr>
						<tr>
							<th>Modification</th>
							<td><input type="submit" name="sauvmodif" value="Enregistrer"</td>
						</tr>
					</table>
				</section>
				
			</article>
			</form>
		</section>


		

		<section>
			<article id="allview">				
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