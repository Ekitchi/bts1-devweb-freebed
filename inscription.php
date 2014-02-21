<!DOCTYPE html>
<html>
	<head>
		<title>FreeBed Location</title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" type="text/css" href="style_inscription.css"/>
		<!--[if IE]>
		<style>
		.item .tooltip .content{ display:none; opacity:1; }
		.item .tooltip:hover .content{ display:block; }
		</style>
		<![endif]-->
		<script type="text/javascript" src="scripts/prefixfree.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-2.1.0.js"></script>
		<meta charset="UTF-8"/>
		<title>FreeBed Location</title>
	</head>

	<body>
		<!-- Inclusion du header -->
		<?php include_once ("header.php"); ?>
		
		<div id='wrap'>
			<div class='options'>
				<label>
					<input type='checkbox' id='vfields' />
					Vertical orientation </label>
				<label>
					<input type='checkbox' id='alerts' />
					Disable alerts </label>
			</div>
			<section class='form'>
				<form action="" method="post" novalidate>
					<fieldset>
						<div class="item">
							<label> <span>Nom</span>
								<input data-validate-length-range="2" data-validate-words="1" name="nom" placeholder="Votre nom" required="required" type="text" />
							</label>
							<div class='tooltip help'>
								<span>?</span>
								<div class='content'>
									<b></b>
									<p>
										Entrez ici votre nom de famille.
									</p>
								</div>
							</div>
						</div>
						<div class="item">
							<label> <span>Prénom</span>
								<input data-validate-length-range="2" data-validate-words="1" name="prenom" placeholder="Votre prénom" required="required" type="text" />
							</label>
							<div class='tooltip help'>
								<span>?</span>
								<div class='content'>
									<b></b>
									<p>
										Entrez ici votre prénom.
									</p>
								</div>
							</div>
						</div>
						<div class="item">
							<label> <span>Occupation</span>
								<input class='optional' name="occupation" data-validate-length-range="5,20" type="text" />
							</label>
							<div class='tooltip help'>
								<span>?</span>
								<div class='content'>
									<b></b>
									<p>
										Entrez ici votre profession.
										<br/>
										e.g : Étudiant, cadre, fonctionnaire...
										<br />
										<em>Au moins 5 caractères sont requis.</em>
									</p>
								</div>
							</div>
							<span class='extra'>(optional)</span>
						</div>
						<div class="item">
							<label> <span>email</span>
								<input name="email" class='email' required="required" type="email" />
							</label>
							<div class='tooltip help'>
								<span>?</span>
								<div class='content'>
									<b></b>
									<p>
										Entre ici votre adresse e-mail de contact.
										<br/>
										Elle sera utilisée pour vous contacter.
										<br />
										<em>Veuillez entrer une adresse type xxx@xxx.xxx</em>
									</p>
								</div>
							</div>
						</div>
						<div class="item">
							<label> <span>Confirmez votre e-mail</span>
								<input type="email" class='email' name="confirm_email" data-validate-linked='email' required='required'>
							</label>
						</div>
						<div class="item">
							<label> <span>Numéro de téléphone</span>
								<input type="number" class='number' name="number" data-validate-length-range="10,60" required='required'>
							</label>
							<div class='tooltip help'>
								<span>?</span>
								<div class='content'>
									<b></b>
									<p>
										Si vous résidez hors de la France, merci de préciser votre indicatif.
										<br/>
										<em>Par exemple, +32 pour la Belgique.</em>
									</p>
								</div>
							</div>
						</div>
						<div class="item">
							<label> <span>Date de naissance</span>
								<input class='date' type="date" name="date" required='required'>
							</label>
						</div>
						<div class="item">
							<label> <span>Mot de passe</span>
								<input type="password" name="password_insc" data-validate-length="6,8" required='required'>
							</label>
							<div class='tooltip help'>
								<span>?</span>
								<div class='content'>
									<b></b>
									<p>
										Choisissez un mot de passe sûr.
										<br/>
										<em>Évitez un mot de passe trop simple, comme le nom d'un de vos proches, ou "mot de passe"...</em>
									</p>
								</div>
							</div>
						</div>
						<div class="item">
							<label> <span>Retapez votre mot de passe</span>
								<input type="password" name="password2" data-validate-linked='password_insc' required='required'/>
							</label>
						</div>
						<div class="item">
							<label> <span>Vous êtes...</span>
								<select class="required" name="dropdown">
									<option value="">--Sélectionnez--</option>
									<option value="o1">Homme</option>
									<option value="o2">Femme</option>
									<option value="o3">Autre</option>
								</select> </label>
						</div>
						<div class="item">
							<label> <span>Site Internet</span>
								<input name="url" placeholder="http://www.monsiteweb.com" type="url" />
								<span class='extra'>(optional)</span> </label>
						</div>

						<div class="item">
							<label> <span>Informations complémentaires</span> 								<textarea name='message'></textarea> </label>
							<span class='extra'>(optional)</span>
						</div>
					</fieldset>
					<button id='send' type='submit'>
						Submit
					</button>
				</form>
			</section>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="scripts/multifield.js"></script>
		<script src="scripts/validator.js"></script>
		<script>
			// initialize the validator function
			validator.message['date'] = 'not a real date';

			// validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
			$('form').on('blur', 'input[required], input.optional, select.required', validator.checkField).on('change', 'select.required', validator.checkField).on('keypress', 'input[required][pattern]', validator.keypress);

			$('.multi.required').on('keyup blur', 'input', function() {
				validator.checkField.apply($(this).siblings().last()[0]);
			});

			// bind the validation to the form submit event
			//$('#send').click('submit');//.prop('disabled', true);

			$('form').submit(function(e) {
				e.preventDefault();
				var submit = true;
				// evaluate the form using generic validaing
				if (!validator.checkAll($(this))) {
					submit = false;
				}

				if (submit)
					this.submit();
				return false;
			});

			/* FOR DEMO ONLY */
			$('#vfields').change(function() {
				$('form').toggleClass('mode2');
			}).prop('checked', false);

			$('#alerts').change(function() {
				validator.defaults.alerts = (this.checked) ? false : true;
				if (this.checked)
					$('form .alert').remove();
			}).prop('checked', false);
		</script>
	</body>
</html>