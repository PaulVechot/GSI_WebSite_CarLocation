<?php
require('controller/frontend.php');

displayInscription();

if (isset($_GET['action'])) {
  if (isset($_GET['id']) && $_GET['id'] > 0) {
    if ($_GET['action'] == 'listvehicule') {
        displayReservationCar();
    }
    elseif ($_GET['action'] == 'reservationInterface') {
      displayReservationInterface();
    }
    else {
      echo 'Erreur : aucun action envoyé';
    }
  }
}
else {
  displayReservation();
}
?>
