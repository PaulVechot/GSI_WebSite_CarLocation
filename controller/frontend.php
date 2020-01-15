<!-- Permet de faire le lien entre le model et la view il sera appelé par la page pour l'affichge -->

<?php
require_once('model/frontend.php');

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

// function errorManager(){
//   set_error_handler(function($niveau, $message, $fichier, $ligne){
//     echo 'Erreur : ' .$message. '<br>';
//     echo 'Niveau de l\'erreur : ' .$niveau. '<br>';
//     echo 'Erreur dans le fichier : ' .$fichier. '<br>';
//     echo 'Emplacement de l\'erreur : ' .$ligne. '<br>';
// }
function inscriptionVerif($value='')
{
  // code...
}

function displayInscription(){

    require_once('view/inscriptionView.php');
    //logger($_POST['nom']);
    //on récupère les variables on le smet dans le tableau client pour l'ajouter den bas epar la suite avec la fonction addClient
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
                   'telephone_client' => $_POST['indicPays'] . $_POST['tel']
                   );
    logger('ajout client: '. $client);
    addClient($client);

  }
 //  require('view/inscriptionView.php');
 //  logger($_POST['nom']);
 //  //on récupère les variables on le smet dans le tableau client pour l'ajouter den bas epar la suite avec la fonction addClient
 //  if (isset ($_POST['valider'])){
 //  $client = array(
 //                 $nom_client => $_POST['nom'],
 //                 $prenom_client => $_POST['prenom'],
 //                 $dateNais => $_POST['dateNais'],
 //                 $email_client => $_POST['email'],
 //                 $adresse => $_POST['adresse'],
 //                 $complementAdresse => $_POST['complementAdresse'],
 //                 $code_postal => $_POST['codePostal'],
 //                 $mot_de_passe => $_POST['motDePasse'],
 //                 $telephone_client => $_POST['indicPays'] . $_POST['tel']
 //                 );
 //  logger($client);
 //  addClient2($client);
 //
 // }
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

function displayReveration(){

    require('view/reservationView.php');
}

function displayContact(){

    require('view/contactView.php');
}

?>
