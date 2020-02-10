<!-- On complete ici la page avec "parametre" manquant de la page index.fr -->

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
$dCar = getCar($_GET['id']);
$title = "Location GSI - Reservation" . $dCar['vehicle_brand'] . " " . $dCar['vehicle_model'];
$customPageStylesheet = "/GSI_WebSite_CarLocation/public/css/modern-business.css"; ?>

<?php ob_start(); ?>


<!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Votre Commande</h1>
    <form method="post">
    <ol class="breadcrumb">
      <h4 class="mt-4 mb-3">Choix de la date</h4>

      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
           </div>
           <label class="col-sm-2 control-label">Date de Départ</label>
          <input name="startdate" class="form-control" type="date" required>
      </div> <!-- form-group// -->
      <div class="form-group input-group">
          <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-calendar"></i></span>
           </div>
           <label class="col-sm-2 control-label">Durée de location</label>
          <input name="returndate" class="form-control" type="text" maxlength="30">
      </div> <!-- form-group// -->

    </ol>

    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h3 class="card-header">Simple</h3>
          <div class="card-body">
            <div class="display-4">$<?php echo $dCar['vehicle_price_per_day']?></div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Qualité Vroom</li>
            <li class="list-group-item">X</li>
            <li class="list-group-item">X</li>
            <li class="list-group-item">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-primary">
                  <input type="radio" name="radio" value="simple" autocomplete="off"> VROOM!
                </label>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card card-outline-primary h-100">
          <h3 class="card-header bg-primary text-white">Plus</h3>
          <div class="card-body">
            <div class="display-4">$<?php echo $dCar['vehicle_price_per_day']+50?></div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Qualité Vroom</li>
            <li class="list-group-item">Assurance Tous Risques</li>
            <li class="list-group-item">X</li>
            <li class="list-group-item">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-primary">
                  <input type="radio" name="radio" value = "plus" autocomplete="off"> VROOM!
                </label>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h3 class="card-header bg-info text-white">Ultra</h3>
          <div class="card-body">
            <div class="display-4">$<?php echo $dCar['vehicle_price_per_day']+100?></div>

          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Qualité Vroom</li>
            <li class="list-group-item">Assurance Tous Risques</li>
            <li class="list-group-item">Pas de limite kilométrique</li>
            <li class="list-group-item">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-primary">
                  <input type="radio" name="radio" value="ultra" autocomplete="off"> VROOM!
                </label>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- bouton de validation -->
    <div class="form-group">
      <button type="submit" name="valider" class="btn btn-primary btn-block">Création du compte  </button>
    </div>
  </form>
</article>
</div>
  <!-- /.container -->

<?php $content = ob_get_clean(); ?>

<!-- On recupère la page template pour al chargé avec les informations spécifiques -->
<?php require('template.php'); ?>
