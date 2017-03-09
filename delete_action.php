<?php


if (is_numeric($_GET['id'])) {
	include_once 'modele/connexion_bdd.php';
	$query = $bdd->prepare();
	$query->execute('DELETE FROM eleve WHERE id =  ? ');
	$query->closeCursor();

	header('Location: index.php');
}
else{
	echo "id n'est pas un nombre";
	header('Refresh: 5;url=index.php');
}
