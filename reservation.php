<?php
require('controller/frontend.php');

if (isset($_GET['action'])) {
  if (isset($_GET['id']) && $_GET['id'] > 0) {
    if ($_GET['action'] == 'creation') {
        displayInscriptionSucess();
    }
    elseif ($_GET['action'] == 'echec') {
      displayInscriptionFail();
    }
    else {
      echo 'Erreur : aucun num envoyé';
    }
  }
}
else {
  displayReservation();
}
?>
