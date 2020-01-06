<?php
	//ConnexionBDD
	$c = new mysqli ("localhost" , "root" , "", "gestion", 8888);
		if ($c->connect_errno) {
		die ("Erreur de connexion (".$c->connect_errno."): ".$c-> connect_error);
	}
	$Y= "localhost";

	// Creation fichier conf.php dans controler dedans je créer des variables avec des noms parlants (je cherche sur google mysqli ("localhost" , "root" , "", "gestion", 8888) pour voir à quoi ça correspond) et puis je fais appel au fichier créee (conf.php) dans ce fichier la (connexionBDD)
?>