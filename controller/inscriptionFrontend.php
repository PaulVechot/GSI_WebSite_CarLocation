<!-- Permet de faire le lien entre le model et la view il sera appelé par la page pour
<?php
// Start the session
session_start();
?>l'affichge -->


<?php
require_once('frontend.php');
require_once('model/frontend.php');

function displayInscription(){

  require_once('view/inscriptionView.php');
  //on récupère les variables on les met dans le tableau client pour l'ajouter den bas epar la suite avec la fonction addClient

}

function displayInscriptionChoix(){

  require_once('view/inscriptionChoixView.php');
}

function inscription(){

  $valid = 1;
  if (isset ($_POST['valider'])){
    //Verification
    //nom prenom
    if(empty($_POST['nom'])){
      $valid = 0;
      $err = ("Le nom d' utilisateur ne peut être vide");
      }
    if(empty($_POST['prenom'])){
      $valid = 0;
      $err = ("Le prénom d'utilisateur ne peut être vide");
      }
      //raison social
    if(empty($_POST['rs'])){
      $valid = 0;
      $err = ("Le mot de passe ne peut être vide");
    }

    //mail
    $v = verifEmail(htmlentities(strtolower(trim($_POST['email_client']))));
    if(empty($_POST['email_client'])){
      $valid = 0;
      $err = ("L'email client ne peut être vide");
    }
    if(!preg_match("/^[a-z0-9\-_.]+@[a-z]+\.[a-z]{2,3}$/i", $_POST['email_client'])){
      $valid = 0;
      $err = "Le mail n'est pas valide";
    }
    if($v != 1){
        $valid = 0;
        $err = "Le mail existe deja";
    }
    //mdp
    if(empty($_POST['motDePasse'])){
      $valid = 0;
      $err = ("Le mot de passe ne peut être vide");
    }
    if($_POST['motDePasse'] != $_POST['motDePasse1']) {
      $valid = 0;
      $err = "La confirmation du mot de passe ne correspond pas";
    }
    logger($valid);
    if ($valid != 0) {
      $mdp = crypt(trim($_POST['motDePasse']), "tutu");
      $client = array(
        'user_name' => htmlentities(trim($_POST['nom'])),
        'user_surname' => htmlentities(trim($_POST['prenom'])),
        'user_rs' => htmlentities(trim($_POST['rs'])),
        'user_birth_date' => $_POST['birth_date'] ,
        'user_email' => htmlentities(strtolower(trim($_POST['email_client']))),
        'user_phone' => $_POST['indicPays'].$_POST['tel'],
        'user_password' => $mdp,
        'user_type' => 2,
        'user_adress' => $_POST['adresse'],
        'user_adress1' => $_POST['complementAdresse'],
        'user_district' => $_POST['codePostal'],
        'user_city' => $_POST['ville']
      );
      addClient($client);
      //LLOG
      ////$date_creation_compte = date('Y-m-d H:i:s'
      logger("testeeeee");
      echo "<script> window.location.replace('index.php') </script>";
    }else {
      logger('rate');
            //header('Location: inscription.php');
      echo "<script>alert('$err');</script>";
    }
  }
}


function displayInscriptionProfessionnel(){

  require_once('view/inscriptionProfessionnelView.php');
  inscription();

}

function displayInscriptionParticulier(){

  require_once('view/inscriptionParticulierView.php');
  inscription();
}
// FIN PARTIE INSCRIPTION
