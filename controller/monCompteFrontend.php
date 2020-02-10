
<?php
require_once('frontend.php');
require_once('model/frontend.php');


  function displayMonCompteCarteAjout(){

    if (isset ($_POST['ajoutcarte'])){
      $card = array(
  			'card_name' => $_POST['card_name'],
  			'card_owner_name' => $_POST['card_owner_name'],
  			'card_number' => $_POST['card_number'],
  			'card_csv' => $_POST['card_csv'],
  			'card_expiration_month' => $_POST['card_expiration_month'],
  			'card_expiration_year' =>  $_POST['card_expiration_year'],
        'user_id' => $_SESSION['user_id']
      );
      $vCard = verifCard($_POST['card_number']);
      if ($vCard =! 0) {
        addCard($card);
      }else{
        echo "<script>alert('La carte existe déjà');</script>";
      }

    }

    require('view/monCompteCarteAjoutView.php');
  }
  function displayMonCompteCarteModif(){

    $resCard = getCard($_SESSION['user_id']);

    require('view/monCompteCarteModifView.php');

    if (isset ($_POST['modifcarte'])){

      $card = array(
  			'card_name' => $_POST['card_name'],
  			'card_owner_name' => $_POST['card_owner_name'],
  			'card_number' => $_POST['card_number'],
  			'card_csv' => $_POST['card_csv'],
  			'card_expiration_month' => $_POST['card_expiration_month'],
  			'card_expiration_year' =>  $_POST['card_expiration_year'],
        'user_id' => $_SESSION['user_id']
      );
      updateCard($card);
    }
  }

  function displayMonCompteInfoPersoModif(){

    $resUser = getUserById($_SESSION['user_id']);


    require('view/monCompteInfoPersoView.php');
  }


  function displayMonCompteHistoConsultation(){
    require('view/monCompteHistoConsultationView.php');
  }

  function displayMonCompteChoix(){
    require('view/monCompteChoixView.php');
  }
