<?php

if (
	empty($_POST['nom']) || 
	empty($_POST['prenom']) || 
	empty($_POST['age']) || 
	empty($_POST['langage'])
	){
	echo "Merci de remplir tous les champs";
}
else{
	include_once 'modele/connexion_bdd.php';

	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$age = htmlspecialchars($_POST['age']);
	$langage = htmlspecialchars($_POST['langage']);

	$query = $bdd->prepare('INSERT INTO eleve (nom, prenom, age, langage) VALUES (?, ?, ?, ?)');
	$query->execute(array(
		$nom,
		$prenom,
		$age,
		$langage
		));
	$query->closeCursor();
}

header('Location: index.php');
