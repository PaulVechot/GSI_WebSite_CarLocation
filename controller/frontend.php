<!-- Permet de faire le lien entre le model et la view il sera appelé par la page pour l'affichge -->

<?php
require_once('model/frontend.php');
//Fonction d elog teporaire pour avoir une trace supllémentaire lors du débuggage
function logger($log){
  $fichierAdresse = './log.txt';
  if (file_exists($fichierAdresse)) {
    $f = fopen($fichierAdresse, 'a+');
    if (is_array($log)) {
      fwrite($f, implode($log) . "\n");
    }else {
      fwrite($f, $log . "\n");
    }
    fclose($f);
  }
}

function displayIndex(){

    require('view/indexView.php');
}

// PARTIE INSCRIPTION
function displayInscription(){

  require_once('view/inscriptionView.php');
  //on récupère les variables on les met dans le tableau client pour l'ajouter den bas epar la suite avec la fonction addClient
  if (isset ($_POST['valider'])){
  $client = array(
                 'nom_client' => $_POST['nom'],
                 'prenom_client' => $_POST['prenom'],
                 //'dateNais' => $_POST['dateNais'],
                 'email_client' => $_POST['email'],
                 //'adresse' => $_POST['adresse'],
                 //'complementAdresse' => $_POST['complementAdresse'],
                 //'code_postal' => $_POST['codePostal'],
                // 'mot_de_passe' => $_POST['motDePasse'],
                 'telephone_client' => $_POST['indicPays'] . $_POST['tel']);
  }
}

function displayInscriptionChoix(){

  require_once('view/inscriptionChoixView.php');
}

function displayInscriptionProfessionnel(){

  require_once('view/inscriptionProfessionnelView.php');
}

function displayInscriptionParticulier(){

  require_once('view/inscriptionParticulierView.php');
}
// FIN PARTIE INSCRIPTION

// PARTIE FAIL/SUCCESS
function displaySucess(){

  require_once('view/sucessView.php');
  if (!empty($_SESSION['nom_client']) || !empty($_SESSION['nom_client'])){
    $personalmessage = "Bonjour " . $_SESSION['nom_client'] . $_SESSION['nom_client'] ;
  }
}

function displayFail(){

  require_once('view/failView.php');
}
// FIN PARTIE FAIL/SUCCESS

function displayConnexion(){

  require('view/connexionView.php');

  if (empty($_POST['pseudo']) || empty($_POST['password']) ){
    echo '<p>une erreur s\'est produite pendant votre identification.
          Vous devez remplir tous les champs</p>
          <p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>';
  }
  if (isset ($_POST['connexion'])){
    //Verification de la connexion
    $connexion = array(
                   'email_client' => $_POST['inputEmail'],
                   'password' => $_POST['inputPassword'],
                   'type_client' => $_POST['profil']
                 );
    $dconnexion = getClient($connexion);
  	if ($dconnexion['password'] == md5($_POST['inputPassword'])) // Acces OK !
  	{
  	    $_SESSION['nom_client'] = $dconnexion['nom_client'];
  	    $_SESSION['prenom_client'] = $dconnexion['prenom_client'];
  	    $_SESSION['type_client'] = $dconnexion['type_client'];

    }else {?>
      <script>
       function redir(){self.location.href="index.php"};
      </script>
      <?php

    }

    // // Log la date de connexion
    // date_default_timezone_set('Europe/France');
    // // Then call the date functions
    // $date = date('Y-m-d H:i:s');
    // logDate($_POST['id_client'], $date);

  }
}

function displayGestionnaire(){

    require('view/gestionnaireView.php');
}

function displayNousConnaitre(){

    require('view/nousConnaitreView.php');
}

function displayContact(){

    require('view/contactView.php');
}

// PARTIE RESERVATION
function displayReservation(){

    require('view/reservationView.php');
}

function displayReservationCar(){

    require('view/reservationCarView.php');
}

function displayReservationInterface(){

    require('view/reservationInterfaceView.php');
}
// FIN PARTIE RESERVATION
?>
