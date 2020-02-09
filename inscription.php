<?php
require('controller/frontend.php');

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'creation') {
    displayInscriptionSucess();
  }
  elseif ($_GET['action'] == 'echec') {
    displayInscriptionFail();
  }
  elseif ($_GET['action'] == 'professionnel') {
    displayInscriptionProfessionnel();
  }
  elseif ($_GET['action'] == 'particulier') {
    displayInscriptionParticulier();
  }
  else {
    displayModalOneChoice('ERREUR','Une erreur inconnue est apparue','Compris', 'btn btn-danger');
  }
}
else {
  displayInscriptionChoix();
}
?>
