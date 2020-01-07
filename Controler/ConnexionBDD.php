<?php

	// Appel fichier conf.php
	INCLUDE 'conf.php';

	//ConnexionBDD
	$c = new mysqli ("localhost" , "root" , "", "gestion", 8888);
		if ($c->connect_errno) {
		die ("Erreur de connexion (".$c->connect_errno."): ".$c-> connect_error);
	}

?>