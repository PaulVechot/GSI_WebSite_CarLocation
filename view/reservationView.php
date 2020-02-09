<!-- On complete ici la page avec "parametre" manquant de la page index.fr -->

<?php
require_once('model/frontend.php');
$title = 'Location GSI - Reservation';
$customPageStylesheet = "/GSI_WebSite_CarLocation/public/css/modern-business.css"; ?>


<?php ob_start(); ?>
<!-- Page Content -->
<div class="container">

  <!-- Page Heading -->
  <h1 class="mt-4 mb-3">Réservation</h1>
  <div class="row">
    <!-- Petit espace rajouté vitre fait -->
    </br>
    </br>
    <!-- Un affichage d'une voiture -->
    <?php
    $resAllCar = getAllCar();
    while ($dAllCar = $resAllCar->fetch()){?>

    <div class="col-lg-6 portfolio-item">
     <div class="card h-100">
       <a href="reservation.php?action=listvehicule&amp;id=<?php echo $dAllCar['vehicle_id']?>"><img class="card-img-top" src="<?php echo $dAllCar['vehicle_image_link']?>" alt=""></a>
       <div class="card-body">
         <h4 class="card-title">
           <a href="reservation.php?action=listvehicule&amp;id=<?php echo $dAllCar['vehicle_id']?>"><?php echo $dAllCar['vehicle_brand'] ." ". $dAllCar['vehicle_model'] ." ". $dAllCar['vehicle_color'] ?></a>
         </h4>
         <p class="card-text"><?php echo $dAllCar['vehicle_description']?></p>
       </div>
     </div>
    </div>
    <?php }?>
  </div>
</div>


 <!-- /.container -->
 <?php $content = ob_get_clean(); ?>

<!-- On recupère la page template pour al chargé avec les informations spécifiques -->
<?php require('template.php'); ?>
