<?php

require_once('conf.php');

// CLIENT
function addClient($client){
	$req = $GLOBALS['c']->prepare('INSERT INTO client(id_client, nom_client, prenom_client, type_client, telephone_client,	email_client) VALUES(0, :nom_client, :prenom_client, 0, :telephone_client, :email_client)');
	$req->execute($client);
}
// Connexion management
function getClient($connexion){
	$req = $GLOBALS['c']->prepare('SELECT id, password, type_client, nom_client, prenom_client FROM client WHERE email_client = :email_client');
	$req->execute($connexion);
	$resConnexion = $req->fetch();
	return $resConnexion;
}
//pas terminer ajout date en bd
	function logDate($id, $date){
	$req = $GLOBALS['c']->prepare('INSERT INTO connexion(heure_connexion, heure_deconnexion, id_connexion) VALUES(0, :nom_client, :prenom_client, 0, :telephone_client, :email_client)');
	$req->execute($client);
	}

// VEHICULE
function getAllCar(){
	$req = $GLOBALS['c']->prepare('SELECT * from vehicule');
	$req->execute();
  return $req;
	}

function getCar($id){
	$req = $GLOBALS['c']->prepare('SELECT * FROM vehicule WHERE id_vehicule = :id');
	$req->execute(['id' => $id]);
	$resCar = $req->fetch();
	return $resCar;
	}

function getCarSameCategory($id){
	$req = $GLOBALS['c']->prepare('SELECT * FROM vehicule where categorie=(SELECT categorie FROM vehicule WHERE id_vehicule=:id)ORDER BY id_vehicule LIMIT 4');
	$req->execute(['id' => $id]);
	return $req;
}




?>
