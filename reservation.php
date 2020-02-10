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
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        displayReservationInterface();
      }else{
        echo 'Erreur : ID non conforme';
      }
  }
  else {
    echo 'Erreur : aucun action envoyé';
  }
}
else {
  displayReservation();
}
