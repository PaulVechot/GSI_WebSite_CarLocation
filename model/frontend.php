<?php

require_once('conf.php');

function addClient($client){
	$req = $GLOBALS['c']->prepare('INSERT INTO client(id_client, nom_client, prenom_client, type_client, telephone_client,	email_client) VALUES(0, :nom_client, :prenom_client, 0, :telephone_client, :email_client)');
	$req->execute($client);
}

function getAllCar(){
	$req = $GLOBALS['c']->prepare('SELECT * from vehicule');
	$req->execute();
  return $req;
	}

function getCar($id){
	//logger($id);
	$req = $GLOBALS['c']->prepare('SELECT * FROM vehicule WHERE id_vehicule = :id');
	$req->execute(['id' => $id]);
	$resCar = $req->fetch();
	//logger('getcar function response'.$res);
	return $resCar;
	}

function getCarSameCategory($id){
	$req = $GLOBALS['c']->prepare('SELECT * FROM vehicule where categorie=(SELECT categorie FROM vehicule WHERE id_vehicule=:id)ORDER BY id_vehicule LIMIT 4');
	$req->execute(['id' => $id]);
	return $req;
}

?>
