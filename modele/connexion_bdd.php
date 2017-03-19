<?php
// Connection base de donnée
// Permet de renvoyer les messages d'erreur sql
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=mysql_atelier', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
	}
	catch (PDOException $e){
		echo "Echec de connexion: " . $e->getMessage();
	}
