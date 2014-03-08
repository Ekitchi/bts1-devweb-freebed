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


		<section id="firstarticle" name="firstarticle">
			<article id="slideshow" name="slideshow">
				<ul id="sContent">
					<li> <img alt="blouh" src="data/s1.png" height="600" width="25%"> </li>
					<li> <img alt="blouh" src="data/s2.png" height="600" width="25%"> </li>
					<li> <img alt="blouh" src="data/s3.jpg" height="600" width="25%"> </li>
				</ul>
				
				
				<!-- <img src="http://placehold.it/1515x600"> -->
				
				<!--Style du Compteur-->
				<!--<div style="text-align:center;"><script type="text/javascript" src="http://services.supportduweb.com/cpt_visits/61149-8-7.js"></script></div><a href="http://www.supportduweb.com/" style="display:block;text-align:center;" title="Outils Services Compteurs G&eacute;n&eacute;rateurs Codes-sources... gratuits pour vos sites"><img src="http://www.webestools.com/images/ban03.gif" alt="Outils Services Compteurs G&eacute;n&eacute;rateurs Codes-sources... gratuits pour vos sites" /></a>
				-->
				
				<!--Compteur Visite-->
				<!--
					if(file_exists('compteur_visites.txt'))
					{
					        $compteur_f = fopen('compteur_visites.txt', 'r+');
					        $compte = fgets($compteur_f);
					}
					else
					{
					        $compteur_f = fopen('compteur_visites.txt', 'a+');
					        $compte = 0;
					}
					if(!isset($_SESSION['compteur_de_visite']))
					{
					        $_SESSION['compteur_de_visite'] = 'visite';
					        $compte++;
					        fseek($compteur_f, 0);
					        fputs($compteur_f, $compte);
					}
					fclose($compteur_f);
					echo '<strong>'.$compte.'</strong> visites.';
				-->
			</article>
			
		</section>

		<section id="bestrated" name="bestrated">
			<article id="best" name="best">
				<img src="http://placehold.it/1100x500">
			</article>

			<article id="bestdesc" name="bestdesc">
				DESC
			</article>
		</section>

		<section id="mostrented" name="mostrented">
			<article id="renteddesc" name="renteddesc">
				DESC
			</article>

			<article id="rented" name="rented">
				<img src="http://placehold.it/1100x500">
			</article>
		</section>

	</body>
</html>
