<?php
  //PC Paul configuration
	$host = "localhost";
	$username = "root";
	$password = "root";
	$bdd = "locationgsi";
	$port = 3306;
	$charset = "utf8";
	$dsn = "mysql:host=$host;dbname=$bdd;charset=$charset";

	//Laptop Paul configuration
	// $host= "localhost";
	// $username= "root";
	// $password= "azerty";
	// $bdd= "locationgsi";
	// $port= 8889;

//creation Database connexion
$c = new PDO($dsn, $username, $password);

//verification connexion
if ($c->connect_errno) {
	die ("Erreur de connexion (".$c->connect_errno."): ".$c-> connect_error);
}
?>
