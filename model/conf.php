<?php

	$host= "localhost";
	$username= "root";
	$password= "";
	$bdd= "locationgsi";
	$port= 8889;

//creation Database connexion
$c = new mysqli ($host, $username, $password, $bdd, $port);

//verification connexion
if ($c->connect_errno) {
	die ("Erreur de connexion (".$c->connect_errno."): ".$c-> connect_error);
}
?>
