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

//PARTIE INSCRIPTION
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

function displayInscriptionSucess(){

  require_once('view/inscriptionFailView.php');

}

function displayInscriptionFail(){

  require_once('view/inscriptionSucessView.php');

}

function displayConnexion(){

    require('view/connexionView.php');
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

//PARTIE RESERVATION
function displayReservation(){

    require('view/reservationView.php');
}

function displayReservationCar(){

    require('view/reservationCarView.php');
}

function displayReservationInterface(){

    require('view/reservationInterfaceView.php');
}

?>
