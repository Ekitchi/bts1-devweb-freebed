<?php include_once ("includes.php"); ?>

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
				PHP QUI AFFICHE LE NOM DU LOGEMENT RICHARD ! WESH WESH
			</article>
		</section>

		<section>
			<article id="slider">
				SLIDER
			</article>
		</section>
		
		<section>
			<article id="logementinfos">
				<section id="logement_infos">
					<article id="logement_text"> A partir de: </article>
					<article id="logement_price"> 299€ </article>
					<article id="logement_date">
						<div class="logement_date">
							Arrivée <br/> <input type="date" placeholder="jj/mm/aaaa" class="form-control form-logement_infos"/>
						</div>
						<div class="logement_date">
							Départ <br/> <input type="date" placeholder="jj/mm/aaaa" class="form-control form-logement_infos"/>
						</div>
						<div class="logement_date">
							Voyageurs <br/>
							<select class="form-control form-logement_infos">
								<option>1</option><option>2</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option>
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
			<article id="logementdesc">
				DESCRIPTION
			</article>
		</section>
		
		<section>
			<article id="userinfos">
				INFOS
			</article>
		</section>
		<section>
			<article id="allview">
				AVIS
			</article>
		</section>

	</body>
</html>