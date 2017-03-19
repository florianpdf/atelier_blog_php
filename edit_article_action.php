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
	// On vérifie que l'id récupéré dans l'url est bien de type numérique ==> sécurité
	// http://php.net/manual/fr/function.is-numeric.php
	// $_GET est une variable global qui permet de récupérer les parametres envoyés via l'url
	// http://php.net/manual/fr/reserved.variables.get.php
    if (is_numeric($_GET['id'])) {
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
    	$query = $bdd->prepare('UPDATE eleve SET nom = :nom, prenom = :prenom, age = :age, langage = :langage WHERE id = :id');

		// Execution de la requete avec la donnée
    	$query->execute(array(
    		':nom' => $nom,
    		':prenom' => $prenom,
    		':age' => $age,
    		':langage' => $langage,
    		':id' => $_GET['id']
    		));

		// On met fin à la requete (http://php.net/manual/fr/pdostatement.closecursor.php)
    	$query->closeCursor();

		// Redirection vers la page d'accueil
    	header('Location: index.php');
    }
    else{
		// Affichage message d'erreur
		// Redirection vers la page d'accueil après 5sec
    	echo "id n'est pas un nombre";
    	header('Refresh: 5;url=index.php');
    }
}
