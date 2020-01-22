<?php
require('controller/frontend.php');


if (isset($_GET['action'])) {
  if ($_GET['action'] == 'listvehicule') {
      if (isset($_GET['id']) && $_GET['id'] > 0) {
      displayReservationCar();
    }else{
      echo 'Erreur : ID non conforme';
    }
  }
  elseif ($_GET['action'] == 'reservationInterface') {
    displayReservationInterface();
  }
  else {
    echo 'Erreur : aucun action envoyé';
  }
}
else {
  displayReservation();
}
