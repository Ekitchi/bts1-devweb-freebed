<!-- Traitements pré-HTML -->
<?php
	include_once("connexion.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>FreeBed Location</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<script src="scripts/jquery-2.1.0.js"></script>
		<script type="text/javascript" src="scripts/prefixfree.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-2.1.0.js"></script>
		<meta charset="UTF-8"/>
	</head>

	<body>
		<!-- Inclusion du header -->
		<?php include_once("header.php"); ?>
				
		<section>
			<article id="minimap">
				MINIMAP (Option)
			</article>
			<article id="filtre">
				<fieldset style="padding:30px">
				<legend><h4><i>Filtres</i></h4></legend>
					<p style="text-align:center;">Budget de <input type="text" name="prix" placeholder=" Prix" value=""/>€ à <input type"text" name="prix2" placeholder=" Prix"/>€</p>
					<br/>
					<p style="text-align:center; padding:5px;">
						<label for="Chambre d'Hôte">Chambre d'Hôte</label>
						<input type="checkbox" id="Chambre d'Hôte" name="Chambre d'Hôte" value="Chambre d'Hôte" style="margin-right:15px;"/>
						<label for="Appartement">  Appartement</label>
						<input type="checkbox" id="Appartement" name="Appartement" value="Appartement" style="margin-right:15px;"/>
						<label for="Maison">  Maison</label>
						<input type="checkbox" id="Maison" name="Maison" value="Maison" style="margin-right:15px;"/>
						<label for="Villa">  Villa</label>
						<input type="checkbox" id="Villa" name="Villa" value="Villa" style="margin-right:15px;"/>
					</p>
					<br/>
					<p style="text-align:center;">Surface recherchée : <input type="text" name="surface" placeholder=" None" value=""/>m²</p>
					<br/>
					<p style="text-align:center;">Pays : <input type="text" name="pays" placeholder=" Pays" value="" style="margin-right:15px;"/>Ville : <input type="text" name="ville" placeholder=" Ville" value=""/></p>
					<br/>		
						<input type"submit"  name="recherchefiltre" value="Recherche">
				</fieldset>
			</article>
		</section>

		<section>
			<article id="allresults">
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