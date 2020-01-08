<?php

	// Appel fichier conf.php
	INCLUDE 'conf.php';

	//ConnexionBDD
	$c = new mysqli ($host, $username, $password, $bdd, $port);
		if ($c->connect_errno) {
		die ("Erreur de connexion (".$c->connect_errno."): ".$c-> connect_error);
	}

?>
