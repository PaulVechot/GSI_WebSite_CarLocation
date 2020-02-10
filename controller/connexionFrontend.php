
<?php
require_once('inscriptionFrontend.php');
require_once('monCompteFrontend.php');
require_once('inscriptionFrontend.php');

require_once('model/frontend.php');


function displayConnexion(){

  require('view/connexionView.php');

  if (empty($_POST['inputEmail']) || empty($_POST['inputPassword']) ){
    echo "<script>alert(Votre password ou votre adresse mail n'est pas renseigné);</script>";
  }
  if (isset ($_POST['connexion'])){
    //Verification de la connexion
    $valid = 1;

    logger(crypt($_POST['inputPassword'], 'tutu'));
    $valid = verifConnexion(crypt($_POST['inputPassword'], 'tutu'), $_POST['inputEmail']);
    if ($valid == 0) {
      //on a verif mtn on doit ajouter dans la session les infos
      $resConnexion = getUser($_POST['inputEmail']);

      $_SESSION['user_name'] = $resConnexion['user_name'];
      $_SESSION['user_surname'] = $resConnexion['user_surname'];
      $_SESSION['user_type'] = $resConnexion['user_type'];
      $_SESSION['user_id'] = $resConnexion['user_id'];


      echo "<script> window.location.replace('index.php') </script>";

    }else{
      echo "<script>
      alert('Identifiant incorrect');
      setTimeout(window.location.replace('connexion.php'), 3000);
      </script>";
    }
  }
}
