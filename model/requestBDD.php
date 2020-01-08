<?php
//Execution de la requete SQL
	$req = $c-> query ("SELECT * From Client");
		if (!$req) {
	$c-> close ();
		die ("Erreur d'execution de la requete !");
	}



// Affichage des resultats
		//while ($row=$req-> fetch_row ()) {
		//print_r ($row);
		//echo "<br/>";
	//}
// Fermeture de laconnexion
	//$c-> close ();
?>