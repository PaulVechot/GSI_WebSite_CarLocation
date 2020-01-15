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
  $res = getAllCar();
  while ($d = $res->fetch()){
  //logger($res)?>
  <div class="col-lg-6 portfolio-item">
   <div class="card h-100">
     <a href="reservationCar.php?vehicule=<?php echo $d['id_vehicule']?>"><img class="card-img-top" src="<?php echo $d['lien_image']?>" alt=""></a>
     <div class="card-body">
       <h4 class="card-title">
         <a href="reservationCar.php?vehicule=<?php echo $d['id_vehicule']?>"><?php echo $d['marque'] ." ". $d['modele'] ." ". $d['couleur'] ?></a>
       </h4>
       <p class="card-text"><?php echo $d['description']?></p>
     </div>
   </div>
  </div>
  <?php }?>
</div>

 <!-- Pagination
 <ul class="pagination justify-content-center">
   <li class="page-item">
     <a class="page-link" href="#" aria-label="Previous">
       <span aria-hidden="true">&laquo;</span>
       <span class="sr-only">Previous</span>
     </a>
   </li>
   <li class="page-item">
     <a class="page-link" href="#">1</a>
   </li>
   <li class="page-item">
     <a class="page-link" href="#">2</a>
   </li>
   <li class="page-item">
     <a class="page-link" href="#">3</a>
   </li>
   <li class="page-item">
     <a class="page-link" href="#" aria-label="Next">
       <span aria-hidden="true">&raquo;</span>
       <span class="sr-only">Next</span>
     </a>
   </li>
 </ul>

-->
 <!-- /.container -->
 <?php $content = ob_get_clean(); ?>

<!-- On recupère la page template pour al chargé avec les informations spécifiques -->
<?php require('template.php'); ?>
