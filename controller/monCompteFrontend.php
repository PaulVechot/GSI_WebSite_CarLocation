<!-- Permet de faire le lien entre le model et la view il sera appelé par la page pour
<?php
// Start the session
session_start();
?>l'affichge -->


<?php
require_once('frontend.php');
require_once('model/frontend.php');


  function displayMonCompteCarteModif(){
    require('view/monCompteView.php');
  }

  function displayMonCompteInfoPersoModif(){

    $resUser = getUserById($_SESSION['user_id']);


    require('view/monCompteInfoPerso.php');
  }


  function displayMonCompteHistoConsultation(){
    require('view/monCompteView.php');
  }

  function displayMonCompteChoix(){
    require('view/monCompteChoixView.php');
  }
