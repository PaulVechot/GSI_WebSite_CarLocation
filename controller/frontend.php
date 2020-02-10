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
require_once('connexionFrontend.php');
require_once('reservationFrontend.php');
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

function displayNousConnaitre(){

    require('view/nousConnaitreView.php');
}

function displayContact(){

    require('view/contactView.php');
}


?>
