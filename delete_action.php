<?php

// On vérifie que l'id récupéré dans l'url est bien de type numérique ==> sécurité
// http://php.net/manual/fr/function.is-numeric.php
// $_GET est une variable global qui permet de récupérer les parametres envoyés via l'url
// http://php.net/manual/fr/reserved.variables.get.php
if (is_numeric($_GET['id'])) {
	include_once 'modele/connexion_bdd.php';
	$query = $bdd->prepare('DELETE FROM eleve WHERE id =  ? ');
	$query->execute(array($_GET['id']));
	$query->closeCursor();

	header('Location: index.php');
}
else{
	echo "id n'est pas un nombre";
	header('Refresh: 5;url=index.php');
}
