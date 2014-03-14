<!-- Traitements pré-HTML -->
<?php
	include_once("includes.php");
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
			<article id="slider" name="slider">
				<ul id="sContent">
					<li> <a href="logement.php?id_logement=3"> <img alt="blouh" src="data/s1.png" height="650" width="25%"> </a> </li>
					<li> <a href="logement.php?id_logement=2"> <img alt="blouh" src="data/photos/1-marina-di-santa-giulia-residence.jpg" height="650" width="25%"> </a> </li>
					<li> <img alt="blouh" src="data/s3.jpg" height="650" width="25%"> </li>
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
				<img src="data/photos/pere_lachaise_2.jpg" height="100%" width="100%">
			</article>

			<article id="bestdesc" name="bestdesc">
				<h2>Le magnifique cimetière du Père Lachaise !</h2><br/><br/>
				<p>Le cimetière du Père-Lachaise est le plus grand cimetière de Paris intra muros et l'un des plus célèbres dans le monde. Situé dans le 20e arrondissement de la ville, de nombreuses personnes célèbres y sont enterrées. Il accueille chaque année plus de trois millions et demi de visiteurs, ce qui en fait le cimetière le plus visité au monde.</p>
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
