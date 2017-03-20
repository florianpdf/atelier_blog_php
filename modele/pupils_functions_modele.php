<?php

// Librairie avec toutes les fonctions de traitement lié à la base de donnée

// Permet de recupérer tous les élèves de la base
function get_all_pupils($bdd)
{
    // Requete qui récupère tous les élèves
    $req = $bdd->query('SELECT * FROM eleve ORDER BY id DESC');
    // Traitement du resultat retourné par la requete
    $pupils = $req->fetchAll();
    // Renvoie du tableau contenant tous les élèves
    return $pupils;
}

// Permet d'ajouter un élèves
function add_pupil($bdd, $nom, $prenom, $age, $langage){
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
