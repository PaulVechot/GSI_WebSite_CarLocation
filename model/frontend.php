<?php

require_once('conf.php');

// CLIENT
// TABLE MEMO
// TABLE Client (
//   id_client BIGINT AUTO_INCREMENT NOT NULL,
//   nom_client VARCHAR(20),
//   raison_social VARCHAR(100),
//   prenom_client VARCHAR(20),
//   birth_date DATE,
//   email_client VARCHAR(30),
//   telephone_client VARCHAR(15),
//   password VARCHAR (20),
//   type_client INT,  0 ou 1
//   adress_client VARCHAR (50),
//   adress_complement VARCHAR(30),
//   code_postal VARCHAR (5),
//   ville VARCHAR (5),
//   PRIMARY KEY (id_client)
// );

function addClient($client){
	$req = $GLOBALS['c']->prepare(
		'INSERT INTO VroomUser(
			user_id,
			user_name,
			user_rs,
			user_surname,
			user_birth_date,
			user_email,
			user_phone,
			user_password,
			user_type,
			user_adress,
			user_adress1,
			user_district,
			user_city
		)
		VALUES(
			0,
			:user_name,
			:user_rs,
			:user_surname,
			:user_birth_date,
			:user_email,
			:user_phone,
			:user_password,
			:user_type,
			:user_adress,
			:user_adress1,
			:user_district,
			:user_city
		)
	');

	$req->execute($client);
}
// Connexion management
function getUser($email){
	$req = $GLOBALS['c']->prepare('SELECT *	FROM VroomUser WHERE user_email = :user_email');
	$req->execute(['user_email' => $email]);
	$resConnexion = $req->fetch();
	return $resConnexion;
}
function getUserById($id){
	$req = $GLOBALS['c']->prepare('SELECT *	FROM VroomUser WHERE user_id = :user_id');
	$req->execute(['user_id' => $id]);
	$resConnexion = $req->fetch();
	return $resConnexion;
}


function updateUser($user){
	$req = $GLOBALS['c']->prepare(
		'UPDATE VroomUser SET
			user_name = :user_name,
			user_rs = :user_rs,
			user_surname = :user_surname,
			user_birth_date = :user_birth_date,
			user_email = :user_email,
			user_phone = :user_phone,
			user_password = :user_password,
			user_type = :user_type,
			user_adress = :user_adress,
			user_adress1 = :user_adress1,
			user_district = :user_district,
			user_city = :user_city
			');
	$req->execute($user);

}

	function logDate($id, $date){
	$req = $GLOBALS['c']->prepare(
		'INSERT INTO LLog(
			log_id,
			log_operation_name,
			log_operation_description,
			log_operation_hour,
			user_id
		)
		VALUES(
			:log_id,
			:log_operation_name,
			:log_operation_description,
			:log_operation_hour,
			:user_id
		)
	');
	$req->execute($client);
	}

// VEHICULE
function getAllCar(){
	$req = $GLOBALS['c']->prepare('SELECT * from Vehicle');
	$req->execute();
  return $req;
	}

function getCar($id){
	$req = $GLOBALS['c']->prepare('SELECT * FROM Vehicle WHERE vehicle_id = :id');
	$req->execute(['id' => $id]);
	$resCar = $req->fetch();
	return $resCar;
	}

function getCarSameCategory($id){
	$req = $GLOBALS['c']->prepare('SELECT * FROM vehicle where vehicle_category=(SELECT vehicle_category FROM Vehicle WHERE vehicle_id=:id)ORDER BY vehicle_id LIMIT 4');
	$req->execute(['id' => $id]);
	return $req;
}

function verifEmail($mail){
	$req = $GLOBALS['c']->prepare('SELECT * FROM vroomuser WHERE user_email = :mail');
	$req->execute(['mail' => $mail]);
	$res = $req->fetch();

	if ($res["user_email"] <> ""){
		//on a trouvé
		$return = 0;
	}else {
		//on a rien trouvé
		$return = 1;
	}
	return $return;
}

function verifConnexion($password, $mail){
	$req = $GLOBALS['c']->prepare('SELECT * FROM vroomuser WHERE user_password = :password AND user_email = :mail');
	$req->execute(['password' => $password, 'mail' => $mail]);
	$res = $req->fetch();

	if ($res['user_id'] <> ""){
		//on a trouvé
		$return = 0;
	}else {
		//on a rien trouvé
		$return = 1;
	}
	return $return;
}

function verifItemBdd($item,$verif, $table){
logger('test');
	$req = $GLOBALS['c']->prepare('SELECT * FROM :table WHERE :item = :verif');
	$req->execute(['item' => $item, 'table' => $table, 'verif' => $verif]);
	$res = $req->fetch();

	if ($res[$item] <> ""){
		//on a trouvé
		$return = 0;
	}else {
		//on a rien trouvé
		$return = 1;
	}
	logger($return);
	return $return;
}




?>
