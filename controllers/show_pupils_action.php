<?php

include_once 'modele/pupils_functions_modele.php';

$pupils = get_all_pupils($bdd);

include_once 'views/show_pupils.php';
