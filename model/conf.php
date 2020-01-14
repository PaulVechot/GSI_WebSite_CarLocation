<?php
  //PC Paul configuration
	//$host= "localhost";
	//$username= "root";
	//$password= "root";
	//$bdd= "locationgsi";
	//$port= 3306;

	//Laptop Paul configuration
	// $host= "localhost";
	// $username= "root";
	// $password= "azerty";
	// $bdd= "locationgsi";
	// $port= 8889;

	//Laptop Fourat configuration
	$host= "localhost";
	$username= "root";
	$password= "";
	$bdd= "locationgsi";
	$port= 8888;

//creation Database connexion
$c = new mysqli ($host, $username, $password, $bdd, $port);

//verification connexion
if ($c->connect_errno) {
	die ("Erreur de connexion (".$c->connect_errno."): ".$c-> connect_error);
}
?>
