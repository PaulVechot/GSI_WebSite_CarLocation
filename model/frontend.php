<?php

require('model/conf.php');


function addClient($c, $client){
	logger('model.addclient');
	$req = $c->prepare('INSERT INTO client(id_client, nom_client, prenom_client, type_client, telephone_client,	email_client) VALUES(:nom_client, :prenom_client, :type_client, :telephone_client, :email_client)');
	$req->execute($client);
  logger('model.addclient');
}

function addClient2($client){
	logger('model.addclient');
//	$c = $bdd->prepare();
	$c->execute("INSERT INTO client(id_client, nom_client, prenom_client, type_client, telephone_client,	email_client) VALUES(0,$nom_client, $prenom_client, 0, $telephone_client, 0)");
  logger('model.addclient');
}


function addClient1($nom, $prenom, $type, $tel, $email){
  if (empty($type) Or empty($email) or empty($tel)) {
    $type = 'clientTest';
    $email = 'clientTest';
    $tel = 'clientTest';
  }
  $c->exec("INSERT INTO client(id_client, nom_client, prenom_client, type_client, telephone_client,	email_client) VALUES(1,$nom, $prenom,$type,$tel,$email)");
}

function addCar($nom, $prenom, $type, $tel, $email){
  if (empty($type) Or empty($email) or empty($tel)) {
    $type = 'clientTest';
    $email = 'clientTest';
    $tel = 'clientTest';
  }
  $c->exec("INSERT INTO client(id_client, nom_client, prenom_client, type_client, telephone_client,	email_client) VALUES(1,$nom, $prenom,$type,$tel,$email)");
}

?>
