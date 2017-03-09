<?php 

	try {
		$bdd = new PDO('mysql:host=localhost;dbname=mysql_atelier', 'your_identifiant', 'your_mdp');
	}
	catch (PDOException $e){
		echo "Echec de connexion: " . $e->getMessage();
	}