<!-- Traitements pré-HTML -->
<?php
	include_once("includes.php");
	include_once("./classes/cl_logement.php");
	$lieux = array();
	
	$query = "SELECT id, latitude, longitude FROM bien";
	$réponse = $bdd->query($query);
	while($données = $réponse->fetch())
	{
		$lieux[$données["id"]] = new Logement($données["id"], $données["latitude"], $données["longitude"]);
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>FreeBed Location</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" type="text/css" href="./css/lyt_recherche.css"/>
		<script src="scripts/jquery-2.1.0.js"></script>
		<script type="text/javascript" src="scripts/prefixfree.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-2.1.0.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript">
			var geocoder;
			var map;
			var lieux = [{id: 0, lat: 0, lng: 0}<?php
				foreach ($lieux as $lieu) {
					echo(",{id: ".$lieu->getId().",lat: ".$lieu->getLatitude().",lng: ".$lieu->getLongitude()."}");
				}?>];
			var marqueurs = [];

			function initialize() {
				var post_adresse = "<?php echo($_POST["adresse"]); ?>"; // Récupération de l'adresse POSTée (j'aime mon humour de merde)
				geocoder = new google.maps.Geocoder();
				var mapOptions = {center: new google.maps.LatLng(-34.397, 150.644), zoom: 8 };
				map = new google.maps.Map(document.getElementById("minimap"), mapOptions);
				codeAddress(post_adresse, geocoder);
				
				
			}
			
			function codeAddress(address) {
				geocoder.geocode({ 'address': address}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						map.setCenter(results[0].geometry.location);
						var marker = new google.maps.Marker({map: map,position: results[0].geometry.location});
						
						// Gros codage gore de marqueur
						/*
						for(var i = 0; i < lieux.length; i++) {
							if (isInMap(lieux[i]["lat"], lieux[i]["lng"])) {
								var pos_marker2 = new google.maps.LatLng(lieux[1]["lat"], lieux[1]["lng"]);
								var marker2 = new google.maps.Marker({map: map,position: pos_marker2});
							}
						}*/
						addMarqueurs();
					} 
					else {
						alert('Geocode was not successful for the following reason: ' + status);
					}
				});
			}

			function isInMap(lat, lng) {
				var map_bounds = map.getBounds();
				var pos_marker = new google.maps.LatLng(lat, lng);

				return map_bounds.contains(pos_marker);
			}

			function addMarqueurs() {
				for (var i = 0; i < marqueurs.length; i++)
					marqueurs[i].setMap(null);
				marqueurs.splice(0);
				for (var i = 0; i < lieux.length; i++) {
					if (isInMap(lieux[i]["lat"], lieux[i]["lng"])) {
						var pos_marker2 = new google.maps.LatLng(lieux[1]["lat"], lieux[1]["lng"]);				
						marqueurs.push(new google.maps.Marker({map: map, position: pos_marker2}));
					}
				}
			}
			
			google.maps.event.addDomListener(window, 'load', initialize);
			google.maps.event.addListener(map, 'zoom_changed', addMarqueurs());
		</script>

		<meta charset="UTF-8"/>
	</head>

	<body>
		<!-- Inclusion du header -->
		<?php include_once("header.php"); ?>
				
		<section>
			<article id="minimap" onclick="addMarqueurs();" onmousewheel="addMarqueurs();">
			</article>
			<article id="filtre">
				<fieldset style="padding:30px">
				<legend><h4><i>Filtres de recherche</i></h4></legend>
					<p style="text-align:center;">Budget de <input type="text" name="prix" placeholder=" Prix" value=""/>€ à <input type"text" name="prix2" placeholder=" Prix"/>€</p>
					<br/>
					<p style="text-align:center; padding:5px;">
						<ul class="InlineList">
							<li>
								<label for="Chambre d'Hôte">Chambre d'Hôte</label>
								<input type="checkbox" id="Chambre d'Hôte" name="Chambre d'Hôte" value="Chambre d'Hôte"/>
							</li>
							<li>
								<label for="Appartement">  Appartement</label>
								<input type="checkbox" id="Appartement" name="Appartement" value="Appartement"/>
							</li>
							<li>
								<label for="Maison">  Maison</label>
								<input type="checkbox" id="Maison" name="Maison" value="Maison"/>
							</li>
							<li>
								<label for="Villa">  Villa</label>
								<input type="checkbox" id="Villa" name="Villa" value="Villa"/>
							</li>
						</ul>
					</p>
					<br/>
					<p style="text-align:center;">Surface recherchée : <input type="text" name="surface" placeholder=" None" value=""/>m²</p>
					<br/>
					<p style="text-align:center;">Pays : <input type="text" name="pays" placeholder=" Pays" value="" style="margin-right:15px;"/>Ville : <input type="text" name="ville" placeholder=" Ville" value=""/></p>
					<br/>		
						<input type="submit"  name="recherchefiltre" value="Recherche">
				</fieldset>
			</article>
		</section>

		<section id="allresults">
			<article>
				<ul>
					<li>
						IMG
						<div classe="imginfos">
							Infos
						</div>
					</li>
					<li>
						IMG
						<div classe="imginfos">
							Infos
						</div>
					</li>
					<li>
						IMG
						<div classe="imginfos">
							Infos
						</div>
					</li>
					<li>
						IMG
						<div classe="imginfos">
							Infos
						</div>
					</li>
					<li>
						IMG
						<div classe="imginfos">
							Infos
						</div>
					</li>
				</ul>
			</article>
		</section>

	</body>
</html>