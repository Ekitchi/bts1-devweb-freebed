<!-- Traitements pré-HTML -->
<?php
	include_once ("includes.php");
	include_once ("./classes/cl_Logement.php");
	
	$lieux = array();
	
	/*
	 *  Attribue la recherche sur Paris par défaut si aucune ville ou Pays n'est précisé 
	 *  grace au champs de recherche auto complété ou aux filtres
	 */
	if(isset($_POST["adresse"])) {
		$adresse = $_POST["adresse"];	
		if($adresse == "")
			$adresse = "Paris, France";	
	}
	else
		$adresse = $_POST["ville"].", ".$_POST["pays"];
	
	/*
	 *  Construction de la requête prenant en charge tous les filtres dynamiquement
	 */
	// Construction d'un tableau de clauses WHERE
	$where = new ArrayObject();
	if (isset($_POST["filtre"])) {
		if ($_POST["prix_min"] != "" && $_POST["prix_max"] != "") {
			$where->append("tarif_j >= ".$_POST["prix_min"]." AND tarif_j <= ".$_POST["prix_max"]);
		}
		if ($_POST["surface"] != "") {
			$where->append("surface <= ".$_POST["surface"]);
		}
		if (isset($_POST["type"])) {
			$type = $_POST["type"];
			$in = "(0";
			foreach ($type as $key) {
				$in = $in.", ".$key;
			}
			$in = $in.")";
			$where->append("type IN ".$in);
		}
		
		// Construction de la chaine de WHERE clause AND clause, grâec au tableau $where[]
		$clauses = "1";
		foreach ($where as $e) {
			$clauses = $clauses." AND ".$e;
		}
		// La query magique générée grâce au super script de la mort \O/
		$query = "SELECT id, latitude, longitude FROM bien WHERE ".$clauses.";";
		$réponse = $bdd -> query($query);
		while ($données = $réponse -> fetch()) {
			$lieux[$données["id"]] = new Logement($données["id"], $données["latitude"], $données["longitude"]);
		}
	}
	// Si aucun filtre n'est défini, gros SELECT de barbare sur la table bien
	else {
		$query = "SELECT id, latitude, longitude FROM bien";
		$réponse = $bdd -> query($query);
		while ($données = $réponse -> fetch()) {
			$lieux[$données["id"]] = new Logement($données["id"], $données["latitude"], $données["longitude"]);
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>FreeBed Location</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" type="text/css" href="./css/lyt_recherche.css"/>
		<script src="scripts/jquery-2.1.0.js"></script>
		<script type="text/javascript" src="scripts/prefixfree.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-2.1.0.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" charset="UTF-8">
			var geocoder;  //  Objet Google: Servira à obtenir une localisation GPS à partir d'une adresse
			var map;       //  Objet Google: Sert à afficher la minimap
			//  Tableau des différents lieux récupérés en php dans la requête pré-HTML
			var lieux = [{id: 0, lat: 0, lng: 0, nom: "0", img: "0", tarif: 0.00}<?php foreach ($lieux as $lieu) { echo(",{id: " . $lieu -> getId() . ", lat: " . $lieu -> getLatitude() . ", lng: " . $lieu -> getLongitude() . ", nom: '" . $lieu -> getNom() . "', img: './data/photos/" . $lieu -> getPhoto() . "', tarif: " . $lieu -> getTarifJournee() . "}");}?>];
			//  Tableau d'objets Google: Sert à stocker les marqueurs à afficher sur la minimap
			var marqueurs = [];

			/*
			 *  Elements Javascripts préparés au chargement de la page
			 */
			function initialize() {
				var post_adresse = "<?php echo($adresse); ?>";  // Récupération de l'adresse POSTée (j'aime mon humour de merde)
				geocoder = new google.maps.Geocoder();  //  Initialisation de l'objet Geocode
				var mapOptions = {center: new google.maps.LatLng(-34.397, 150.644), zoom: 12 };
				map = new google.maps.Map(document.getElementById("minimap"), mapOptions);
				codeAddress(post_adresse, geocoder);
				}

			/*
			 *  Fonction permettant de géocoder l'adresse passée par le champ de recherche header.
			 */
			function codeAddress(address) {
				geocoder.geocode({ 'address': address}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						// Définit le centre de la map aux coordonées renvoyées par l'objet geocoder
						map.setCenter(results[0].geometry.location);

						addMarqueurs();
						}
					else {
						//  Affiche une boite de dialogue alert en cas d'erreur
						alert('Geocode was not successful for the following reason: ' + status);
					}
				});
			}

			/*
			 *  Fonction permettant de déterminer si un point est dans le cadre de la map
			 */
			function isInMap(lat, lng) {
				var map_bounds = map.getBounds();
				var pos_marker = new google.maps.LatLng(lat, lng);

				return map_bounds.contains(pos_marker);
			}

			/*
			 *   Fonction ajoutant sur la map tous les marqueurs inclus dans les limites de la map
			 */
			function addMarqueurs() {
				cleanResults();
				for (var i = 0; i < marqueurs.length; i++)
				marqueurs[i].setMap(null);
				marqueurs.splice(0);
				for (var i = 0; i < lieux.length; i++) {
					if (isInMap(lieux[i]["lat"], lieux[i]["lng"])) {
						var pos_marqueurs = new google.maps.LatLng(lieux[i]["lat"], lieux[i]["lng"]);
						marqueurs.push(new google.maps.Marker({map: map, position: pos_marqueurs, title: lieux[i]["nom"]}));
						addSearchResults(i);
					}
				}
			}

			function addSearchResults (id) {
				var zone_results = document.getElementById("allresults").firstChild.nextSibling.firstChild.nextSibling;
				var resultat = document.createElement("li");
				resultat.setAttribute("class", "Boxed");
				var photo = document.createElement("img");
				photo.setAttribute("src", lieux[id]["img"]);
				photo.setAttribute("alt", lieux[id]["nom"]);
				var lien = document .createElement("a");
				var titre = document.createTextNode(lieux[id]["nom"]);
				lien.setAttribute("href", "./logement.php?id_logement="+lieux[id]["id"]);
				lien.appendChild(titre);
				var description = document.createElement("p");
				var desc_text = document.createTextNode("A partir de : "+lieux[id]["tarif"]+"€");
				description.appendChild(desc_text);
				resultat.appendChild(photo);
				resultat.appendChild(lien);
				resultat.appendChild(description);
				zone_results.appendChild(resultat);
				}

			function cleanResults () {
				var zone_results = document.getElementById("allresults").firstChild.nextSibling.firstChild.nextSibling;
				while (zone_results.firstChild)
				zone_results.removeChild(zone_results.firstChild);
				}

				google.maps.event.addDomListener(window, 'load', initialize);
				google.maps.event.addListener(map, 'zoom_changed', addMarqueurs());
		</script>

	</head>

	<body>
		<!-- Inclusion du header -->
		<?php
		include_once ("header.php");
		?>

		<section>
			<article id="minimap" onclick="addMarqueurs();" onmousewheel="addMarqueurs();"></article>
			<article id="filtre" class="Boxed">
				<form method="post" action="recherche.php">
					<h4>Filtres de recherche</h4>
					<p>
						Budget de
						<input type="text" name="prix_min" placeholder=" Prix" value=""/>
						€ à
						<input type"text" name="prix_max" placeholder=" Prix"/>
						€
					</p>
					<br/>
					<ul class="InlineList">
						<li>
							<label for="Chambre d'Hôte">Chambre d'Hôte</label>
							<input type="checkbox" id="Chambre d'Hôte" name="type[]" value="1"/>
						</li>
						<li>
							<label for="Appartement"> Appartement</label>
							<input type="checkbox" id="Appartement" name="type[]" value="2"/>
						</li>
						<li>
							<label for="Maison"> Maison</label>
							<input type="checkbox" id="Maison" name="type[]" value="3"/>
						</li>
						<li>
							<label for="Villa"> Villa</label>
							<input type="checkbox" id="Villa" name="type[]" value="4"/>
						</li>
					</ul>
					<br/>
					<p>
						Surface recherchée :
						<input type="text" name="surface" placeholder=" None" value=""/>
						m²
					</p>
					<br/>
					<p>
						Pays :
						<input type="text" name="pays" placeholder=" Pays" value="" style="margin-right:15px;"/>
						<br />
						Ville :
						<input type="text" name="ville" placeholder=" Ville" value=""/>
					</p>
					<br/>
					<input type="submit"  name="filtre" value="Recherche">
				</form>
			</article>
		</section>

		<h2 style="clear: both;">Résultats de votre recherche :</h2>
		<section id="allresults">
			<article>
				<ul>
					<li>
						<img src="" alt="" />
						<div classe="imginfos">
							Infos
						</div>
					</li>

				</ul>
			</article>
		</section>
		<?php
		include_once ("footer.php");
		?>
	</body>
</html>