<!-- On complete ici la page index avec "parametre" manquant de la page index.fr -->

<?php $title = 'Location GSI - Accueil'; ?>
<?php $customPageStylesheet = "/GSI_WebSite_CarLocation/public/css/modern-business.css"; ?>

<!-- On charge dans un buffer un gros contenu le menu -->
<?php ob_start(); ?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
  <!-- retour à la page principale -->
    <a class="navbar-brand" href="index.php">Location GSI</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <!-- Espace gestionnaire -->
          <a class="nav-link" href="/GSI_WebSite_CarLocation/gestionnaire.php">Gestionnaire</a>
        </li>
        <li class="nav-item">
          <!-- Espace de reservation -->
          <a class="nav-link" href="reservation.php">Reservation</a>
        </li>
        <li class="nav-item">
           <!-- info entreprise -->
          <a class="nav-link" href="nousConnaitre.php">Nous connaitre</a>
        </li>
        <li class="nav-item">
          <!-- Page de contact -->
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
           <!-- Page de inscription -->
          <a class="nav-link" href="inscription.php">Inscription</a>
        </li>
        <li class="nav-item">
           <!-- Page de connexion -->
          <a class="nav-link" href="connexion.php">Connexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php $menu = ob_get_clean(); ?>

<?php ob_start(); ?>
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

 <!-- Content -->
 <div class="container">

   <!-- Nos valeurs Section -->
     <h2><br><b></b>Nos Valeurs</b></h2></br></h2>
   </br>
   </br>
   <div class="row">
     <div class="col-lg-4 col-sm-6 portfolio-item">
       <div class="card h-100">
         <a href="#"><img class="card-img-top" src="public/image/accueil_valeurs/satisfaction.svg" alt=""></a>
         <div class="card-body">
           <h4 class="card-title">
            Satisfaction client
           </h4>
           <p class="card-text">Avec des indices toujours positifs, notre levier de différenciation le plus conséquent est la satisfaction de nos clients.</p>
         </div>
       </div>
     </div>
     <div class="col-lg-4 col-sm-6 portfolio-item">
       <div class="card h-100">
         <a href="#"><img class="card-img-top" src="public/image/accueil_valeurs/partner.svg" alt=""></a>
         <div class="card-body">
           <h4 class="card-title">
            Responsabilité
           </h4>
           <p class="card-text">Une entreprise responsable toujours à l’écoute de ses clients.</p>
         </div>
       </div>
     </div>
     <div class="col-lg-4 col-sm-6 portfolio-item">
       <div class="card h-100">
         <a href="#"><img class="card-img-top" src="public/image/accueil_valeurs/value.svg" alt=""></a>
         <div class="card-body">
           <h4 class="card-title">
             Qualité
           </h4>
           <p class="card-text">Un service de qualité et des voitures très bien entretenues</p>
         </div>
       </div>
     </div>
     <div class="col-lg-4 col-sm-6 portfolio-item">
       <div class="card h-100">
         <a href="#"><img class="card-img-top" src="public/image/accueil_valeurs/map.svg" alt=""></a>
         <div class="card-body">
           <h4 class="card-title">
             Proximité
           </h4>
           <p class="card-text">Avec une proposition de valeur diversifiée nous nous adressons à toute l’Île de France.</p>
         </div>
       </div>
     </div>
     <div class="col-lg-4 col-sm-6 portfolio-item">
       <div class="card h-100">
         <a href="#"><img class="card-img-top" src="public/image/accueil_valeurs/respect.svg" alt="" ></a>
         <div class="card-body">
           <h4 class="card-title">
            Respect
           </h4>
           <p class="card-text">Le respect de nos engagements induit la fidélité de nos clients.</p>
         </div>
       </div>
     </div>
     <div class="col-lg-4 col-sm-6 portfolio-item">
       <div class="card h-100">
         <a href="#"><img class="card-img-top" src="public/image/accueil_valeurs/solution.svg" alt=""></a>
         <div class="card-body">
           <h4 class="card-title">
            Integrité
           </h4>
           <p class="card-text">Étant donné que notre première préoccupation est la qualité de notre offre et la satisfaction de nos clients notre pôle administratif offre un service professionnel et bien rodé.</p>
         </div>
       </div>
     </div>
   </div>
  </div>
<?php $content = ob_get_clean(); ?>
<!-- On recupère la page template pour al chargé avec les informations spécifiques -->
<?php require('template.php'); ?>
