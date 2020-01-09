<!-- Permet de faire le lien entre le model et la view il sera appelé par la page pour l'affichge -->




<?php
require('model/frontend.php');

function displayIndex(){

    require('view/indexView.php');
}

function displayInscription(){

    require('view/inscriptionView.php');
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
