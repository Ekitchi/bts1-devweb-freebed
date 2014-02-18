function verifFormu() {
		var nom=document.forms. inscription.nom.value;
		var prenom=document.forms. inscription.prenom.value;
		var mail=document.forms. inscription.mail.value;
		var password=document.forms. inscription.password.value;
		var homme=document.forms.inscription.homme.value;
		var femme=document.forms.inscription.femme.value;

		if (document.forms. inscription.nom.value == ''){

			alert("Veuillez préciser votre nom.");

			return false;
		}


		if (document.forms. inscription.password.value == ''){

			alert ("Veuillez entrer un mot de passe.");

			return false;
		}

		if (document.forms. inscription.prenom.value ==''){

			alert("Veuillez préciser votre prénom.");

			return false;
		}




		if ((document.forms. inscription.homme.checked==false)&&(document.forms. inscription.femme.checked==false)){
			alert("Veuillez séléctionner votre sexe");

			return false;
		}
		
}