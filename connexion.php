<?php
require('controller/frontend.php');

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'connexion') {
    displaySucess();
  }
  else {
    displayFail();
  }
}
else {
  displayConnexion();
}
?>
