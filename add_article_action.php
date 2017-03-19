<?php

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
	// On appel la base de donnée
	// http://php.net/manual/fr/function.include-once.php
	include_once 'modele/connexion_bdd.php';

	// Sécurité, htmlspecialchars permet de remplacer les caractères spéciaux par leur équivalent HTML
	// Exemple: < passé dans la fonction htmlspecialchars renvoie &lt;
	// http://php.net/manual/fr/function.htmlspecialchars.php
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$age = htmlspecialchars($_POST['age']);
	$langage = htmlspecialchars($_POST['langage']);

	// Requete d'ajout en base de donnée
	// La requete préparer permet d'executer une action en deux temps, écriture de la requete puis ajout des varibles et execution
	// Permet d'executer une requete plusieurs fois mais avec des valeurs différents, sécurise également la requete
	// http://php.net/manual/fr/pdo.prepare.php
	$query = $bdd->prepare('INSERT INTO eleve (nom, prenom, age, langage) VALUES (?, ?, ?, ?)');
	// Execution de la requete avec la donnée
	$query->execute(array(
		$nom,
		$prenom,
		$age,
		$langage
		));
	// On met fin à la requete (http://php.net/manual/fr/pdostatement.closecursor.php)
	$query->closeCursor();
}

// Redirection vers la page d'accueil
header('Location: index.php');
