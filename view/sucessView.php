
<?php
// immatriculation VARCHAR(15),
// marque VARCHAR(10),
// modele VARCHAR(10),
// categorie VARCHAR(12),
// description VARCHAR(300),
// lien_image VARCHAR(100),
// couleur VARCHAR(10),
// id_reservation BIGINT,

require_once('model/frontend.php');

$title = 'Location GSI - Inscription réussie';
$customPageStylesheet = "/GSI_WebSite_CarLocation/public/css/connexionSucess.css";
?>



<?php ob_start(); ?>
<!-- Page Content -->
<div class="sucessRegistering">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light">Bienvenue <?php $personalmessage?>au sein de notre maison</h1>
        <p class="lead">Cette page vous redirigera dans 3 secondes à la page d'accueil</p>
      </div>
    </div>
  </div>
</div>


<!-- Redirection automatique au bout d'un certain temps -->
<script>
 function redir(){self.location.href="index.php";}
 setTimeout(redir,2000)
</script>

<?php $content = ob_get_clean(); ?>

<!-- On recupère la page template pour al chargé avec les informations spécifiques -->
<?php require('template.php'); ?>
