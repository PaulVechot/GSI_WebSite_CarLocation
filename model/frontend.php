<?php

include 'conf.php';

function addClient($client){
  // on affecte les ellement du tableau dans les bonnes variables
  $nom = $client[1];
  $prenom = $client[2];
  $type = $client[3];
  $tel = $client[4];
  $email = $client[5];
  //on effectue la requete vers la base de donnée
  $c->exec("INSERT INTO client(id_client, nom_client, prenom_client, type_client, telephone_client,	email_client) VALUES(1,$nom, $prenom,$type,$tel,$email)");
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
