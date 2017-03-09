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
    if (is_numeric($_GET['id'])) {
        include_once 'modele/connexion_bdd.php';

    	$nom = htmlspecialchars($_POST['nom']);
    	$prenom = htmlspecialchars($_POST['prenom']);
    	$age = htmlspecialchars($_POST['age']);
    	$langage = htmlspecialchars($_POST['langage']);

    	$query = $bdd->prepare('UPDATE eleve SET nom = :nom, prenom = :prenom, age = :age, langage = :langage WHERE id = :id');
    	$query->execute(array(
    		':nom' => $nom,
    		':prenom' => $prenom,
    		':age' => $age,
    		':langage' => $langage,
    		':id' => $_GET['id']
    		));
    	$query->closeCursor();

    	header('Location: index.php');
    }
    else{
    	echo "id n'est pas un nombre";
    	header('Refresh: 5;url=index.php');
    }
}
