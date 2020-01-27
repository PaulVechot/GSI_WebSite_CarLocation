<?php $title = 'Location GSI - A notre propos'; ?>
<?php $customPageStylesheet = "/GSI_WebSite_CarLocation/public/css/modern-business.css"; ?>

<?php ob_start(); ?>

<!-- Header -->
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
     </ol>
     <div class="carousel-inner" role="listbox">
       <!-- Slide 1 - les images sont reliés au document image -->
       <div class="carousel-item active" style="background-image: url('public/image/accueil_slider/slide1.jpg')">
         <div class="carousel-caption d-none d-md-block">
           <h3>Location GSI</h3>
           <p>Meilleur rapport qualité prix sur toute l'ile de France</p>
         </div>
       </div>
       <!-- Slide 2 - les images sont reliés au document image -->
       <div class="carousel-item" style="background-image: url('public/image/accueil_slider/slide2.jpg')">
         <div class="carousel-caption d-none d-md-block">
           <h3>Offres diversifiées</h3>
           <p>Location GSI vous propose toutes les gammes de voitures pour répondre au mieux à vos besoins.</p>
         </div>
       </div>
       <!-- Slide 3 - les images sont reliés au document image -->
       <div class="carousel-item" style="background-image: url('public/image/accueil_slider/slide3.jpg')">
         <div class="carousel-caption d-none d-md-block">
           <h3>Large cible</h3>
           <p>Location GSI s'adresse à la fois aux professionnels et aux particuliers.</p>
         </div>
       </div>
     </div>
     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
   </div>
</header>

<div class="container">
     <h2><br><b></b>Notre équipe</b></h2></br></h2>
   </br>
   </br>
  <div class="row">
    <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 4 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://source.unsplash.com/ZI6p3i9SbVU/500x350" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Team Member</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->



  <?php $content = ob_get_clean(); ?>

  <!-- On recupère la page template pour al chargé avec les informations spécifiques -->
  <?php require('template.php'); ?>
