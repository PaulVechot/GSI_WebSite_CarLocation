<!-- Permet de faire le lien entre le model et la view il sera appelé par la page pour l'affichge -->




<?php
require('model/frontend.php');

function displayIndex(){

    require('view/indexView.php');
}

function errorManager(){
  set_error_handler(function($niveau, $message, $fichier, $ligne){
    echo 'Erreur : ' .$message. '<br>';
    echo 'Niveau de l\'erreur : ' .$niveau. '<br>';
    echo 'Erreur dans le fichier : ' .$fichier. '<br>';
    echo 'Emplacement de l\'erreur : ' .$ligne. '<br>';
}

function displayInscription(){

    require('view/inscriptionView.php');
    //on récupère les variables on le smet dans le tableau client pour l'ajouter den bas epar la suite avec la fonction addClient


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
