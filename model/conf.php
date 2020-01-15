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


	//Laptop Fourat configuration
	$host= "localhost";
	$username= "root";
	$password= "";
	$bdd= "locationgsi";
	$port= 8888;

//creation Database connexion
try {
    $c = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
//verification connexion

?>
