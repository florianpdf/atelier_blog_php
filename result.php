<?php

if (empty($_POST['prenom']) && empty($_POST['age'])){
		echo "eroor remplissez tou les champs";
}
else{
	$result = [];
	foreach ($_POST as $key => $value) {
		$result[$key] = htmlspecialchars($value);
	}
}