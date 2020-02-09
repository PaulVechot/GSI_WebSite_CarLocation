<!-- Permet de faire le lien entre le model et la view il sera appelé par la page pour

// BOOTSTRAP BUTTON INFO
// class="btn btn-primary">Primary</button>
// class="btn btn-secondary">Secondary</button>
// class="btn btn-success">Success</button>
// class="btn btn-danger">Danger</button>
// class="btn btn-warning">Warning</button>
// class="btn btn-info">Info</button>
// class="btn btn-light">Light</button>
// class="btn btn-dark">Dark</button>
// class="btn btn-link">Link</button>
<?php
// Start the session
session_start();
?>l'affichge -->


<?php
require_once('inscriptionFrontend.php');
require_once('monCompteFrontend.php');
require_once('model/frontend.php');

//Fonction d elog teporaire pour avoir une trace supllémentaire lors du débuggage
function logger($log){
  $fichierAdresse = './log.txt';
  if (file_exists($fichierAdresse)) {
    $f = fopen($fichierAdresse, 'a+');
    if (is_array($log)) {
      fwrite($f, implode($log) . "\n");
    }else {
      fwrite($f, $log . "\n");
    }
    fclose($f);
  }
}

function displayIndex(){

    require('view/indexView.php');
}
function displayModalOneChoice($t, $tm, $bt, $bc){
  require('view/modalView.php');
  $title = $t;
  $messageText = $tm ;
  $buttonText = $bt ;
  $buttonClass = $bc;

}

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

function displayNousConnaitre(){

    require('view/nousConnaitreView.php');
}

function displayContact(){

    require('view/contactView.php');
}

// PARTIE RESERVATION
function displayReservation(){

    require('view/reservationView.php');
}

function displayReservationCar(){

    require('view/reservationCarView.php');
}

function displayReservationInterface(){

    require('view/reservationInterfaceView.php');
}
// FIN PARTIE RESERVATION
?>
