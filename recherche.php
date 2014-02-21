<!DOCTYPE html>
<!-- Traitements pré-HTML -->
<?php
	include_once("connexion.php");
?>
<html>
	<title>FreeBed Location</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<script src="jquery-1.10.2.min.js"></script>

	<head>
		<meta charset="UTF-8"/>
		<title>FreeBed Location</title>
	</head>

	<body>
		<!-- Inclusion du header -->
		<?php include_once("header.php"); ?>
				
		<section>
			<article id="minimap">
				MINIMAP (Option)
			</article>
			<article id="filtre">
				FILTRE
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
				</ul>
			</article>
		</section>
		
		
		

	</body>
</html>