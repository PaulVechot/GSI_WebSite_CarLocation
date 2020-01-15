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
$d = getCar($_GET['vehicule']);

$title = "Location GSI - Reservation" . $d['marque'] . " " . $d['modele'];
$customPageStylesheet = "/GSI_WebSite_CarLocation/public/css/modern-business.css"; ?>

<!-- Page Content -->
  <div class="container">


    <h1 class="mt-4 mb-3"><?php echo $d['marque'] . " " . $d['modele'] . " " . $d['couleur'];?></h1>


    <!-- Portfolio Item Row -->
    <div class="row">

      <!-- Image voiture -->
      <div class="col-md-8">
        <img class="img-fluid" src="<?php echo $d['lien_image']?>" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">Description de la voiture</h3>
        <p><?php echo $d['description']?></p>
        <h3 class="my-3">Détails de la voiture</h3>
        <ul>
          <li>Immatriculation: <?php echo $d['immatriculation']?></li>
          <li>Modèle: <?php echo $d['immatriculation']?></li>
          <li>Catégorie: <?php echo $d['categorie']?></li>
          <li>Marque: <?php echo $d['marque']?></li>
          <li>Couleur: <?php echo $d['couleur']?></li>
        </ul>
        <!-- Bouton je reserve -->
        <button class="button" style="vertical-align:middle"><span>Je reserve </span></button>
      </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <h3 class="my-4">Véhicules associés</h3>

    <div class="row">

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </a>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

 <?php $content = ob_get_clean(); ?>

<!-- On recupère la page template pour al chargé avec les informations spécifiques -->
<?php require('template.php'); ?>
