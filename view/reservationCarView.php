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
$title = "Location GSI - Reservation" . $dCar['marque'] . " " . $dCar['modele'];
$customPageStylesheet = "/GSI_WebSite_CarLocation/public/css/modern-business.css"; ?>

<?php ob_start(); ?>
<!-- Page Content -->
<div class="container">
  <h1 class="mt-4 mb-3"><?php echo $dCar['marque'] . " " . $dCar['modele'] . " " . $dCar['couleur'];?></h1>

  <!-- row du content central -->
  <div class="row">

    <!-- Image voiture -->
    <div class="col-md-8">
      <img class="img-fluid" src="<?php echo $dCar['lien_image']?>" alt="">
    </div>
    <!-- Content principal -->
    <div class="col-md-4">
      <h3 class="my-3">Description de la voiture</h3>
      <p><?php echo $dCar['description']?></p>
      <h3 class="my-3">Détails de la voiture</h3>
      <ul>
        <li>Immatriculation: <?php echo $dCar['immatriculation']?></li>
        <li>Modèle: <?php echo $dCar['modele']?></li>
        <li>Catégorie: <?php echo $dCar['categorie']?></li>
        <li>Marque: <?php echo $dCar['marque']?></li>
        <li>Couleur: <?php echo $dCar['couleur']?></li>
      </ul>
      <!-- Bouton je reserve -->
      <button class="button" style="vertical-align:middle"><span>Je reserve </span></button>
    </div>
  </div>

  <!-- Vehicule de même catégorie -->
  <h3 class="my-4">Nous vous proposons aussi ces véhicules de la même catégorie:<?php echo $dCar['categorie']?> </h3>

  <div class="row">
    <?php
    $resCarSameCategory = getCarSameCategory($_GET['id']);
    while ($dCarSameCategory = $resCarSameCategory->fetch()){
    ?>
    <div class="col-md-3 col-sm-6 mb-4">
      <a href="reservation.php?action=listvehicule&amp;id=<?php echo $dCarSameCategory['id_vehicule']?>">
        <img class="img-fluid" src="<?php echo$dCarSameCategory['lien_image']?>" alt="">
      </a>
    </div>
    <?php
    }
    ?>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->

<?php $content = ob_get_clean(); ?>

<!-- On recupère la page template pour al chargé avec les informations spécifiques -->
<?php require('template.php'); ?>
