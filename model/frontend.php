<?php

require_once('conf.php');

function addClient($client){
	$req = $GLOBALS['c']->prepare('INSERT INTO client(id_client, nom_client, prenom_client, type_client, telephone_client,	email_client) VALUES(0, :nom_client, :prenom_client, 0, :telephone_client, :email_client)');
	$req->execute($client);
}

function getCarByAgency($agency){

	//$agency = 1 => agence 1
	//$agency = 2 => agence 2
	//$agency = 3 => agence 3
	//$agency = 4 => agence 1 et agence 2
	//$agency = 5 => agence 1 et agence 3
	//$agency = 6 => agence 2 et agence 3

	$req = $GLOBALS['c']->prepare('SELECT client(id_client, nom_client, prenom_client, type_client, telephone_client,	email_client) VALUES(0, :nom_client, :prenom_client, 0, :telephone_client, :email_client)');
	$req->execute($client);
}

?>
