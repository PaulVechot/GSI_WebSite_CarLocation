<?php

include 'conf.php';

function addClient($client){

	$c = $bdd->prepare('INSERT INTO client(id_client, nom_client, prenom_client, type_client, telephone_client,	email_client) VALUES(0, :nom_client, :prenom_client, :type_client, :telephone_client,	:email_client)');
	try {
		$c->execute($client);
	} catch (\Exception $e) {

	}

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
