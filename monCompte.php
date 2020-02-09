<?php
require('controller/frontend.php');


if (isset($_GET['action'])) {
  if ($_GET['action'] == 'carteModif') {
    displayMonCompteCarteModif();
  }
  elseif ($_GET['action'] == 'infoPersoModif') {
    displayMonCompteInfoPersoModif();
  }
  elseif ($_GET['action'] == 'histoConsultation') {
    displayMonCompteHistoConsultation();
  }else {
    displayMonCompteChoix();
  }
}




?>
