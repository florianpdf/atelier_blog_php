<?php
///////////
// Controllers de visualisation du formulaire d'ajout et d'enregistrement d'un nouvel élève en base de donnée
///////////

// Si aucun champs du formulaire n'est renseigné ou encore si le formulaire n'est pas validé
if (empty($_POST)){
	// On renvoie l'affichage du formulaire
	include_once 'views/add_pupil.php';
}

// Sinon,on est dans le cas ou le formulaire est envoyé
else{
	// On inclus la librairie liée à notre modele
	include_once 'modele/pupils_functions_modele.php';

	// Vérification que tous les champs du formumaire sont bien renseignés, sinon on renvoie un message d'erreur
	if (
		empty($_POST['nom']) ||
		empty($_POST['prenom']) ||
		empty($_POST['age']) ||
		empty($_POST['langage'])
		){
		echo "Merci de remplir tous les champs";
	}
	else{
		// Sécurité, htmlspecialchars permet de remplacer les caractères spéciaux par leur équivalent HTML
		// Exemple: < passé dans la fonction htmlspecialchars renvoie &lt;
		// http://php.net/manual/fr/function.htmlspecialchars.php
		$nom = htmlspecialchars($_POST['nom']);
		$prenom = htmlspecialchars($_POST['prenom']);
		$age = htmlspecialchars($_POST['age']);
		$langage = htmlspecialchars($_POST['langage']);

		// Appel du modele ==> execution de la requete d'enregistrement en base de donné
		add_pupil($bdd, $nom, $prenom, $age, $langage);
	}

	// Redirection vers le controllers frontal index.php
	header('Location: index.php');
}
