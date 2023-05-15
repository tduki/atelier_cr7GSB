<?php
	// Définitions de constantes pour la connexion à MySQL
	$hote= "localhost";
	$login= "root"; 
	$mdp= "";
	$nombd= "gsb_frais";

	// Connection au serveur
	try {
			$connexion = new PDO("mysql:host=$hote;dbname=$nombd", $login, $mdp);
	} catch ( Exception $e ) { 
		  die("\nConnexion à '$hote' impossible: ".$e->getMessage());
	}
?>
