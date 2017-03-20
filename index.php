<?php

// Controllers frontal, point d'accès

// Appel à la base de donnée
include_once 'modele/connexion_bdd.php';

// Si les aucun parametres n'est défini dans l'url, on appel le controlleurs permettant de renvoyer la page d'accueil avec tous les élèves
if (empty($_GET))
{
    include_once 'controllers/show_pupils_action.php';
}
// Si le parametres de l'url est add, on renvoie le controlleurs permettant d'afficher le formulaire d'ajout
elseif ($_GET['section'] == 'add')
{
    include_once 'controllers/add_pupil_action.php';
}
