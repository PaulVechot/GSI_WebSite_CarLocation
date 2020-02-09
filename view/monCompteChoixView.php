
<?php

require_once('model/frontend.php');

$title = 'Location GSI - Mon Compte';
$customPageStylesheet = "/GSI_WebSite_CarLocation/public/css/connexionSucess.css";
?>

<?php ob_start(); ?>
<!-- Page Content -->
<div class="sucessRegistering">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light">Bienvenue au sein de notre maison</h1>
        <br>
        <p class="lead">Selectionner votre profil</p>
        <form>
          <input type="button" value="Modification carte bancaire" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href='monCompte.php?action=carteModif'" />
          <input type="button" value="Modification Info Personnel" class="btn btn-primary btn-lg btn-block" onclick="window.location.href='monCompte.php?action=infoPersoModif'" />
          <input type="button" value="Consultation Historique" class="btn btn-secondary btn-lg btn-block" onclick="window.location.href='monCompte.php?action=histoConsultation'" />
        </form>
      </div>
    </div>
  </div>
</div>


<?php $content = ob_get_clean(); ?>

<!-- On recupère la page template pour al chargé avec les informations spécifiques -->
<?php require('template.php'); ?>
