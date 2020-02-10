
<?php
require_once('inscriptionFrontend.php');
require_once('monCompteFrontend.php');
require_once('inscriptionFrontend.php');

require_once('model/frontend.php');

// PARTIE RESERVATION
function displayReservation(){

    require('view/reservationView.php');
}

function displayReservationCar(){

    require('view/reservationCarView.php');
}

function displayReservationInterface(){

  require('view/reservationInterfaceView.php');

//Verification DATA
  $valid = 1;
  if (isset ($_POST['valider'])){
    //DATE
    if(empty($_POST['startdate']) OR empty($_POST['returndate'])){
      $valid = 0;
      $err = ("Le champ date est nul");
    }
    logger($_POST['startdate']-$_POST['returndate']);
    //$diffdate = $_POST['startdate']->diff($_POST['returndate'])->format("%a");
    if($diffdate>=0){
      $valid = 0;
      $err = ("Choix de date impossible");
    }
    //verif resa
    $vbooking = verifBookingStatusForVehicle($_GET['id']);
    if($vbooking != 1){
      $valid = 0;
      $err = ("Cette voiture est déja reservé");
    }
    //on ajouter
    if ($valid != 0) {
      //on calcul prix
      if($_POST['radio'] == 'simple'){
        $priceperday = $dCar['vehicle_price_per_day'];
      }
      if($_POST['radio'] == 'plus'){
        $priceperday = $dCar['vehicle_price_per_day']+50;
      }
      if($_POST['radio'] == 'ultra'){
        $priceperday = $dCar['vehicle_price_per_day']+100;
      }

      $totalprice = $diffdate*$priceperday;

      $booking = array(
        'booking_status' => "Attente",
        'booking_type' => $_POST['radio'],
        'booking_leaving_date'=> $_POST['startdate'],
        'booking_date_depart' => $_POST['startdate'],
        'booking_planned_return_date' => $_POST['returndate'],
        'booking_real_return_date' => $_POST['returndate'],
        'booking_leaving_km' => 0,
        'booking_return_km' => 0,
        'booking_price_per_day' => $priceperday,
        'booking_price_TVA' =>  '20',
        'booking_price_total' => $totalprice,
        'user_id' => $_SESSION['user_id'],
        'vehicle_id' => $_GET['id']
      );
      updateBooking($booking);
      echo "<script> window.location.replace('index.php') </script>";
    }else {
      echo "<script>alert('$err');</script>";
    }
  }
}
// FIN PARTIE RESERVATION
